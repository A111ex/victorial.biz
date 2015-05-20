dateObj = new Date();
var curr_day = dateObj.getDay(),
	curr_year = dateObj.getFullYear(),
	curr_month = dateObj.getMonth(),
	curr_date = dateObj.getDate(),
	arrM = [-6,0,-1,-2,-3,-4,-5],
	arrF = [-2,4,3,2,1,0,-1],
	arrMonth = ['Января','Февраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентября','Октября','Ноября','Декабря'];

///////////////////////////////////////////////////////////////////////////////	
function findDay(arrDay, curr_day, curr_date,curr_year, curr_month)
{
	for(var i=0; i<arrDay.length; i++){
		if(i == curr_day){	
		var new_day = curr_date + arrDay[i];
		break;
		}
	}	
	var x = new Date(curr_year,curr_month,new_day);
	y = x.getDate();
	if(y<9){y ='0'+ y;}
	yy = x.getMonth();
	return y;
}
/////////////////////////////////////////////////////////////////////////////
string = findDay(arrM, curr_day, curr_date,curr_year, curr_month);
string+='-' + findDay(arrF, curr_day, curr_date,curr_year, curr_month);
string+=' ' + arrMonth[yy];

