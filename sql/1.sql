select date_format(date, '%Y-%m-%d'), sum(score> 0) as num_pos_score, sum(score<0) as num_neg_score
from assessments
where
date >= "2011-03-01 00:00:00"
and
date <= "2011-04-30 23:59:59"
group by date_format(date, '%Y-%m-%d')
