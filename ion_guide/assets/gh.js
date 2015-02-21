var generateChart = function(container) {
	var _parent = this;
	_parent.container = container;
	_parent.user = container.attr('user');
	_parent.repo = container.attr('repo');
	_parent.branch = container.attr('branch');
	_parent.pastDays = 365;
	_parent.weeks = (_parent.pastDays / 7) - 1; //0 based
	_parent.last_sha = null;

	//console.log('loading activity for ' + _parent.repo);

	//set default values for all 52 weeks
	_parent.commits = [];
	for (var h=0; h<_parent.weeks;h++) {
		_parent.commits[h] = 0;
	}
	_parent.currentTime = new Date();
	_parent.currentWeek = new Date(_parent.currentTime.setDate(_parent.currentTime.getDate()-7));
	_parent.lastYear = new Date(_parent.currentTime.setDate(_parent.currentTime.getDate()-_parent.pastDays));
	_parent.commitK = 0;
	var page = 1;

	_parent.createGraph = function(commits){

		setTimeout(function(){
			var totalCommits = 0;
			for (var i=0; i<commits.length; i++) {
				totalCommits = totalCommits + commits[i];
			}

			if (totalCommits > 0) {
				sortedCommits = commits.slice(0);
				sortedCommits.reverse();
				_parent.container.find('.chart').sparkline(sortedCommits, {
					type: 'bar',
					barColor: '#666',
					height:'2em',
					width:'25em'
				});
			}
			else {
				_parent.container.find('.chart').css('visibility', 'hidden');
			}
		}, 0);
	};

	_parent.getCommits = function(last_sha){

		try {
			if (typeof last_sha === 'undefined')
				last_sha = null;

			gh.commit.forBranch(_parent.user, _parent.repo, _parent.branch, last_sha, function(data){

				if (typeof data != 'undefined' && typeof data.data[0] !== 'undefined') {
					var new_commits = data.data.length;
					var testDate = new Date(data.data[0].commit.committer.date.substr(0, 10));

					if (new_commits > 0 && testDate.getTime() > _parent.lastYear.getTime()) {

						for (i=0; i < data.data.length; i++) {

							//save the last commit sha for pagination
							if (i === (data.data.length-1)) {
								_parent.last_sha = data.data[i].sha;
							}

							var year = data.data[i].commit.committer.date.substr(0, 4);
							var month = data.data[i].commit.committer.date.substr(5, 2);
							var day = data.data[i].commit.committer.date.substr(9, 2);

							if (day.substr(1) == 'T')
								day = day.substr(0,1);

							var date = new Date();
							date.setMonth(month);
							date.setDate(day);
							date.setFullYear(year);

							if (date.getTime() > _parent.lastYear.getTime()) {

								if (date.getTime() > _parent.currentWeek.getTime() && _parent.commitK < _parent.weeks) {
									_parent.commits[_parent.commitK] = _parent.commits[_parent.commitK]+1;
								}
								else {
									_parent.currentWeek = new Date(_parent.currentWeek.setDate(_parent.currentWeek.getDate()-7));

									_parent.commitK++;
									if (_parent.commitK < _parent.weeks)
										_parent.commits[_parent.commitK] = _parent.commits[_parent.commitK]+1;
								}

							}
						}

						_parent.createGraph(_parent.commits);

						//get the next page of commits
						if (_parent.last_sha !== null && _parent.last_sha.length > 0){
							_parent.getCommits(_parent.last_sha);
						}
					}
					else {
						_parent.createGraph(_parent.commits);
					}
				}
				else {
					_parent.createGraph(_parent.commits);
				}

			});
		} catch(e) {
			_parent.createGraph(_parent.commits);
		}
	};

	_parent.getCommits(0);
};


$(document).ready(function(){

	var i = 0;
	var charts = [];
	
	if (ie === undefined) {
		$('div.entry-content div.project').each(function(){
			charts[i] = new generateChart($(this));
			i++;
		});
	}
	else {
		$('div.entry-content div.project div.chart,div.entry-content div.project div.caption').hide();
		$('div.entry-content div.inactiveProject div.chart,div.entry-content div.inactiveProject div.caption').hide();
	}

});