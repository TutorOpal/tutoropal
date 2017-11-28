
<html>
<head>
<meta charset="UTF-8">
<title>Tutorial Belajar JavaScript</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
 
<body>

<form onsubmit="return false">
  <label>Masukkan ID Video YouTube (11Digit): </label>
  <input type="text" id="codes" placeholder="Tulis/paste kode di sini lalu klik 'Konversi'"/>
</form>
<br/><br/><br/><br/>
<div class="button-group">
  <button id="tombol_form">Submit</button>
  <button value="Reset" onClick="window.location.reload()"> Reset</button>
  </div>

  <!-- Modal content -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p style='color:white !important;' class='isijudul'></p>
    <div class='iframediv'></div>
  </div>
</div>
</body>
<style>

iframe{
	width:100% !important;
	margin-bottom:-5px;
height:100% !important;
}

.iframediv{
    background: url(loader.gif) center center no-repeat;
    background-size: 107px;
    background-color: white;
    border-left:1px solid #ccc;
    border-right:1px solid #ccc;
    border-bottom:1px solid #ccc;
height:100% !important;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.iframediv{
    position:absolute;
    left:-1px;
    width:300px;
}
/* Modal Content/Box */
.modal-content {
        background-color: #333;
    margin: 15% auto;
    padding: 8px;
    position:relative;
    border: 1px solid blue;
height:276px !important;
    width: 300px;
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.iklan{
    width: 100%;
    height: 90px;
    margin: auto;
    display: table;
    margin-top: 10px;
    margin-bottom:10px;
}
@keyframes blinker {  
  50% { opacity: 0; }
}
@-webkit-keyframes blinker {  
  50% { opacity: 0; }
}
@-moz-keyframes blinker {  
  50% { opacity: 0; }
}
a{
 font-size:11.6px;   
}
span{
 text-align:center;   
}
}
@media only screen and (max-width: 1000px) {
.iklan{
width : 90% !important;
}
.marginbot{
 margin-bottom:5px !important;   
}
}
@media only screen and (max-width: 500px) {
.iklan{
height:60px;

}
.marginbot{
 margin-bottom:5px !important;   
}
}
}

#main-wrapper{padding:0;width:100%;border:0}
code{font-family:Consolas,Monaco,'Andale Mono','Courier New',Courier,Monospace;color:#2a5ead;font-size:13px;padding:2px 4px;color:#d14;}
#codes{border:0;width:68%;height:30px;margin:0 auto;display:block;background-color:#f0f0f0;color:#999;padding:15px;font:400 14px 'Courier New',Monospace;border-radius:6px;box-shadow:inset 0 0 10px rgba(0,0,0,0.05);transition:all 2s}
#codes:hover,#codes:focus{background-color:#fafafa;color:#666;box-shadow:inset 0 0 10px rgba(0,0,0,0.1);}
.button-group{width:100%;max-width:78.5%;float:none;margin:0 auto 0;text-align:center}
button,button[disabled]:active{width:42.3%;border:none;padding:14px 12px;text-align:center;color:#fff;display:inline-block;white-space:nowrap;background-color:#3498db;cursor:pointer;font-size:13px;position:relative;top:-20px;margin:0 8px;letter-spacing:.5px;border-radius:3px;transition:all 0.2s}
button:hover,button:focus{background:#43a9ed;color:#fff}
button[disabled],button[disabled]:active{background:#43a9ed;color:#fff;}
#opt1,#opt2,#opt3,#opt4,#opt5{display:inline-block;margin:0 10px 0 0;vertical-align:middle;border:none;outline:none}
#outer-wrapper {margin:0 auto;text-align:left;float:none;background-position:center!important;}
#post-wrapper {width:100%;max-width:100%;margin:0 auto;text-align:left;float:none;background-position:center!important;}
.post-body,.post{background-position:center!important;}
.post-body p{margin:0}
#blog1,#artikel,.blog-posts{background-position:center!important;}
#comments,#sidebar-wrapper,#menu-wrap {display:none;margin-top:0;margin:0;}
.post-inner {padding:0 0 0 0;margin:20px auto;}
.post-body ul#wrapin{width:100%;max-width:68.5%;display:table;position:relative;margin:0 auto;font-size:13px}
.post-body ul#wrapin li {display:block;margin:0 auto;text-align:left;}
.post-body ul#wrapin br {display:none;}
.option-input{-webkit-appearance:none;-moz-appearance:none;-ms-appearance:none;-o-appearance:none;appearance:none;position:relative;right:0;bottom:0;left:0;height:16px;width:16px;transition:all 0.15s ease-out 0s;background:#f0f0f0;border:none;color:#fff;cursor:pointer;display:inline-block;margin-right:0.5rem;outline:none;position:relative;border-radius:10%;}
.option-input:hover{background:#eee}
.option-input:checked{background:#2ecc71}
.option-input:checked::before{height:16px;width:16px;position:absolute;content:'\f00c';font-family:fontawesome;display:inline-block;font-size:12.66667px;text-align:center;line-height:16px}
.option-input:checked::after{-webkit-animation:click-wave 0.65s;-moz-animation:click-wave 0.65s;animation:click-wave 0.65s;background:#40e0d0;content:'';display:block;position:relative;z-index:100}
.option-input.radio{border-radius:50%}
.option-input.radio::after{border-radius:50%}
</style>
<script>
document.getElementById("tombol_form").
addEventListener("click", download);

var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
function download(judul) {
    modal.style.display = "block";
    document.getElementsByClassName("isijudul")[0].innerHTML='Download Here';
	var nilai_form=document.getElementById("codes").value;
    var iframe = document.createElement('iframe');
    iframe.style.cssText = '    border: 0px;height: 123px;';
  	iframe.src = 'http://api.listenvid.com/?default/'+nilai_form+'/mp3/5E81B1';
   	document.getElementsByClassName('iframediv')[0].appendChild(iframe);
}



// When the user clicks on <span> (x), close the modal
document.getElementById('myModal').onclick = function() {
    modal.style.display = "none";
    var element = document.getElementsByTagName("iframe"), index;

for (index = element.length - 1; index >= 0; index--) {
    element[index].parentNode.removeChild(element[index]);
}
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</html>