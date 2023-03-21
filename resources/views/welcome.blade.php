<div id="header"></div>
<div class="left"></div>
<div class="stuff">
  <br><br>
  <h1>Curriculum Vitae,</h1>
  <h2>Joshua Lucas Samudra</h2>
  <hr />
  <br>
  <p class="head">Interests</p>
  <ul>
    <li>Drawing</li>
    <li>Gaming</li>
    <li>Design</li>
    <li>Computer Science</li>
  </ul>
  <p class="head">Skills</p>
  <ul>
    <li>Drawing, a lil bit program</li>
  </ul>
  <p class="head">Education</p>
  <ul>
    <a href="https://www.uib.ac.id/">
      <li>Universitas International Batam</li>
  </ul>
  <p class="head">Experience</p>
  <ul>
    <li>SKM Student</li>
    <li>Near Death</li>
  </ul>
  <p class="head">Extracurriculars</p>
  <ul>
    <li>None</li>
  </ul>
</div>
<div class="right"></div>
<div id="footer">
  <h2 id="name">Joshua</h2></div>

  <style>
* {
  max-width: 700px;
  margin: auto;
}


/*body {
    min-width: 500px;
}*/

div {
  border-radius: 5px;
}

#header {
  height: 40px;
  width: 100%;
  background-color: #ffcccc;
  position: fixed;
  z-index: 1;
}

#title {
  margin-left: 3%;
}

#footer {
  height: 50px;
  width: 100%;
  background-color: #ffcccc;
  clear: both;
  position: relative;
}

.left {
  height: 1000px;
  width: 45px;
  background-color: #e0eeee;
  float: left;
  position: fixed;
}

.right {
  height: 1000px;
  width: 45px;
  background-color: #e0eeee;
  float: right;
  position: inherit;
}

.stuff {
  display: inline-block;
  margin-top: 6px;
  margin-left: 55px;
  width: 75%;
  height: 1000px;
}

p,
li {
  font-family: 'Cormorant Garamond';
}

.head {
  font-size: 20px;
}

#name {
  font-family: Sacramento;
  float: right;
  margin-top: 10px;
  margin-right: 4%;
}

a {
  color: black;
  text-decoration: none;
}

@media only screen and (max-width: 430px) {
  .left,
  .right {
    display: none;
  }
  .stuff {
    width: 100%;
    margin-left: 10px;
  }
}
    </style>