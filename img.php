<script type="text/javascript">  
        function showPreview(source) {  
            var file = source.files[0];  
            if(window.FileReader) {  
                var fr = new FileReader();  
                fr.onloadend = function(e) {  
                    document.getElementById("portrait").src = e.target.result;  
                };  
                fr.readAsDataURL(file);  
            }  
        }  
    </script>  
  
<input type="file" name="file" onchange="showPreview(this)" />  
<img id="portrait" width="200" height="200">  
