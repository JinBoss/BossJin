<script type="text/javascript">  
        function showPreview(source) {  
            var file = source.files[0];  
            if(window.FileReader) {  
                var fr = new FileReader(); 
                //当它执行的时候就触发，不管成功或者失败（onload） 
                fr.onloadend = function(e) {  
                    document.getElementById("portrait").src = e.target.result;  
                };  
                //转储成一个Data对象，获取的URL地址
                fr.readAsDataURL(file);  
            }  
        }  
        //转换成二进制

</script>  
  
<input type="file" name="file" onchange="showPreview(this)" />  
<<<<<<< HEAD
<img id="portrait" src="" width="200" height="200">  
<input type="button" value="二进制" onclick=>
<div style="background-color: red; width: 200px;height: 200px;" id="fileAs"></div>
=======
<img id="portrait" width="200" height="200">  
<a href="www.baidu11.com"></a>