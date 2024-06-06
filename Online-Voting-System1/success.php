<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #505050;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #020348;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
      .btn {
	    position: relative;
    width: 100%;
    height: 42px;
    margin: 20px 0px;
    font-family: sans-serif;
    font-weight: 400;
    font-size: 1rem;
    color: #ffffff;
    transition: all 0.1s linear;
    border-radius: 4px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    align-self: center;
    border: none;
    cursor: pointer;
    outline: 0;
    text-transform: capitalize;
    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), linear-gradient(to right, #020D51, #19B0DC);
}
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #bbe186; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Aadhaar Verified</h1> 
        <button class="btn" style="background-color: #020348;    background-image: none;" <input type="button" value="Close this window" onclick="self.close()">Back to Home</button>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script>
        let myWindow;

function openWin() {
  myWindow = window.open("", "", "width=200,height=100");
}

function closeWin() {
  myWindow.close();
}
</script>
    </body>
</html>