<html>
<head>
<title></title>

<style>
select { border:0; color:#EEE; background:transparent;
font-size:20px; font-weight:bold; padding:2px 10px; width:378px;
*width:350px; *background:#58B14C; -webkit-appearance: none; }

#mainselection { overflow:hidden; width:350px;
-moz-border-radius: 9px 9px 9px 9px;
-webkit-border-radius: 9px 9px 9px 9px;
border-radius: 9px 9px 9px 9px;
box-shadow: 1px 1px 11px #330033;
background: url("http://www.danielneumann.com/wp-content/uploads/2011/01/arrow.gif") no-repeat scroll 319px 5px #58B14C; 
}
select option:checked:after {
    content: attr(title);
    background: #666;
    color: #fff;
    position: absolute;
    width: 100%;
    left: 0;
    border: none;
}
</style>

</head>
<body>

    <div id="mainselection">
    <select>
    <option>Select an Option</option>
    <option>Option 1</option>
    <option>Option 2</option>
    </select>
    </div>
</body>
</html>