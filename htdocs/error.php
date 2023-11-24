<?php 
  
  $error = $_SERVER[REDIRECT_STATUS];
  $error_title='';
  $error_message = '';

  if($error = 404){
    $error_title = '404 Page Not Found';

  }
  else {
    $error_title = '';

  }
  
  ?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <link rel="stylesheet" href="error.css">
    <script src="error.js"></script>
</head>
<body>


<div class="error">

<div class="wrap">
  <div class="404">
    <pre><code>
	 <span class="green">&lt;!</span><span>DOCTYPE html</span><span class="green">&gt;</span>
<span class="orange">&lt;html&gt;</span>
    <span class="orange">&lt;style&gt;</span>
   * {
		        <span class="green">everything</span>:<span class="blue">awesome</span>;
}
     <span class="orange">&lt;/style&gt;</span>
 <span class="orange">&lt;body&gt;</span> 
              ERROR 404!
				FILE NOT FOUND!
				<span class="comment">&lt;!--The file you are looking for, 
					is not where you think it is.--&gt;
		</span>
 <span class="orange"></span> 
			  


</div>
<br />
<span class="info">
<br />

<span class="orange">&nbsp;&lt;/body&gt;</span>

<br/>
      <span class="orange">&lt;/html&gt;</span>
    </code></pre>
  </div>
</div>


</span>

</body>
</html>