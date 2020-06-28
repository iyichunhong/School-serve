// +----------------------------------------------------------------------
// | 学号：2017051604014
// +----------------------------------------------------------------------
// | Author: 刘慧敏
// +----------------------------------------------------------------------
<script>
function showlibrary()
{
	var a=document.getElementById('username').value;
	if(a=="")
	{
		alert('人名不能为空!');
		return false;
	}
    var elements = document.getElementsByClassName(class="n");

    var formData =new FormData();
    for(var i=0; i<elements.length; i++)
    {
        
        formData.append(elements[i].name,elements[i].value);
        
    }
    var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function()
        {
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
            {
            	 document.getElementById('aaaa').innerHTML = xmlHttp.responseText;
            }
        }
        xmlHttp.open("post", "search.php"); 
        xmlHttp.send(formData); 
}
   
</script>
