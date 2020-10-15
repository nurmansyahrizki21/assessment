SELECT date, result
FROM assessmetns
WHERE 
  (date BETWEEN '2011-03-01' AND '2011-04-30' AND result > 0) or  
  (date NOT BETWEEN '2011-03-01' AND '2011-04-30')
