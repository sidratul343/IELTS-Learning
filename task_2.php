<!DOCTYPE html>
<html>
<head>
<style>

.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'main main main right right right'
    'footer footer footer footer footer footer';
  grid-gap: 10px;
  background-color: white;
  padding: 10px;
}

.grid-container > div {
  background-color: #0b105e;
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
color:white;
}
.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; 
background-color: white;
}
.item4 { grid-area: right; }
.item5 { grid-area: footer; }
.all{
background-color: white;
}
.t{

border-radius: 25px;
  background: #070c63;
color:red;
}

.tt{

border-radius: 25px;
  background: #959bed;
color:black;
font-size: 20px;
padding:5px;
}
.im{
width: 600px;
height: 600px;
display:block;
}
</style>
</head>
<body>

<div class="grid-container">
  <div class="item1">IELTS TASK 2</div>
  <div class="item3" style = "background-color: white;">
<img src="tt1.jpg" alt="Paris" class = "im">

</div>  
  <div class="item4" style = "background-color: white;">
<p class = "all" style = "background-color: red; border-radius: 25px; color:white;">Tips for Task 2</p>

<p class = "tt">IELTS Writing Task 2 is the second part of the writing test,
<br>where you are presented with a point of view, argument or problem and asked to<br>
 write an essay in response.</p>

<p class = "tt">Your essay should be in a formal style, at least 250 words in length<br>
 and you should aim to complete it in under 40 minutes. </p>

<p class = "tt">You must understand the question before you attempt to answer it.<br>
 This way, you’ll know exactly what the examiner is looking for. One of the biggest<br>
 mistakes students make is not answering the question fully, which stops them from getting a score higher than a Band 5.</p>

<p class = "tt">In your conclusion, you should provide a summary of what you already said in the rest of your essay.</p>
<p class = "tt">Making a good plan actually saves you time when you write your essay.<br>
 This guide will show you how to plan and write a clear essay every time.</p>

<p class = "tt">Complex sentences help you boost your score for grammar.<br>
 They are actually very simple to write and are not complex at all.<br>
cohesion and coherence; in other words, it’s flow. Here are some useful expressions:<br>
 in addition, furthermore, however, although.</p>
<p class = "tt">Don’t forget spelling and punctuation count towards accuracy.</p>



</body>
</html>
