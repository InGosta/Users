var buttons=document.getElementsByName('btn');

for (var i = 0; i < buttons.length; i++) {
	buttons[i].onclick =function Click ()
{
	
        return confirm('Удалить?');


    }


}
/*var req = getXmlHttp();

	req.onreadystatechange = function() { 

        if ((req.readyState == 4) && (req.status == 200)) {

                alert("Ответ сервера: "+req.responseText);
            }

        }

        req.open('GET', 'php/delete.php', true); 
        req.send(null);*/
otherDate=new Date(2019,02,03);
nowDate= new Date();
delta=nowDate.getTime()-otherDate.getTime();
alert("Прошло "+Math.floor(delta/1000/60/60/24)+" дней");
console.log(today);




