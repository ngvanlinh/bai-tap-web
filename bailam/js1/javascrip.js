var close = document.getElementsByClassName("close");
for(var i = 0; i < close.length; i ++)
    {
        close[i].addEventListener("click", function(){
            document.getElementsByClassName("login")[0].style.display = ("none");
            document.getElementsByClassName("login")[1].style.display = ("none");
        })
    }