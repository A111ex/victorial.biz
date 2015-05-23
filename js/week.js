//Новый скрипт
    var dateObj = new Date();
var obj = {
    curr_day : dateObj.getDay(),
    curr_year : dateObj.getFullYear(),
    curr_month : dateObj.getMonth(),
    curr_date : dateObj.getDate(),
    arrM : [-6,0,-1,-2,-3,-4,-5],
    arrF : [-2,4,3,2,1,0,-1],
    arrMonth :['Января','Февраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентября','Октября','Ноября','Декабря'],
    month : [],
    
    func: function (x) {
        var newDay = this.curr_date + x[this.curr_day];
        newDay =  new Date (this.curr_year,this.curr_month, newDay);
        this.month.push(this.arrMonth[newDay.getMonth()]);
        if(newDay < 9){
            newDay = '0'+ newDay;
        }
        return newDay.getDate();
    },
};
// console.log(obj.func(obj.arrM)+'-'+obj.func(obj.arrF)+' '+obj.month[obj.month.length - 1]);