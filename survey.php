<!doctype html>
<html>
<head>
<title>R & B Restaurant</title>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:200i,400&display=swap');

:root {
  --color-white: #f3f3f3;
  --color-darkblue: #1b1b32;
  --color-darkblue-alpha: rgba(27, 27, 50, 0.8);
  --color-green: #37af65;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.4;
  color: var(--color-white);
  margin: 0;
}

/* mobile friendly alternative to using background-attachment: fixed */
body::before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: -1;
  background: var(#f39f86);
  background-image: linear-gradient(
      115deg,
      rgba(243, 159, 134, 0.0),
      rgba(249, 217, 118, 0.65)
    ),
    url(./images/bara.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

h1 {
  font-weight: 400;
  line-height: 1.2;
}

p {
  font-size: 1.125rem;
}

h1,
p {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

label {
  display: flex;
  align-items: center;
  font-size: 1.125rem;
  margin-bottom: 0.5rem;
}

input,
button,
select,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button {
  border: none;
}

.container {
  width: 100%;
  margin: 3.125rem auto 0 auto;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

.header {
  padding: 0.2rem 0.2rem 0.2rem 0.2rem;
  margin-bottom: 1rem;
  border-radius: 0.25rem;
  background: rgba(178,34,34,0.75);
transition:  0.4s ease-in-out;
}

header:hover{
  transform: scale(1.1);
  background-color: rgba(139,0,0,0.75);
}

.description {
  font-style: italic;
  font-weight: 200;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
  
}

.clue {
  margin-left: 0.25rem;
  font-size: 0.9rem;
  color: #e4e4e4;
}

.text-center {
  text-align: center;
}

/* form */

form {
  background: 	rgba(32,32,32,0.9);
  padding: 2.5rem 0.625rem;
  border-radius: 0.25rem;
}

@media (min-width: 480px) {
  form {
    padding: 2.5rem;
  }
}

.form-group {
  margin: 0 auto 1.25rem auto;
  padding: 0.25rem;
}

.form-control {
  display: block;
  width: 100%;
  height: 2.375rem;
  padding: 0.375rem 0.75rem;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.input-radio,
.input-checkbox {
  display: inline-block;
  margin-right: 0.625rem;
  min-height: 1.25rem;
  min-width: 1.25rem;
}

.input-textarea {
  min-height: 120px;
  width: 100%;
  padding: 0.625rem;
  resize: vertical;
}

.submit-button {
  display: block;
  width: 100%;
  padding: 0.75rem;
  background: var(--color-green);
  color: inherit;
  border-radius: 2px;
  cursor: pointer;
  transition:  0.1s;
}

.submit-button:hover {
  background: rgba(173,255,47,0.7);
}




</style>
</head>
<body>
<div class="container">
  <header class="header">
    <h1 id="title" class="text-center">Restaurant Feedback Form</h1>
    <p id="description" class="description text-center">
      Thank you for taking the time to help us improve!
    </p>
  </header>
  <form id="survey-form">
    <div class="form-group">
      <label id="name-label" for="name" required="required">Name</label>
      <input
        type="text"
        name="name"
        id="name"
        class="form-control"
        placeholder="Enter your name"
        required
      />
    </div>
    <div class="form-group">
      <label id="email-label" for="email">Email</label>
      <input
        type="email"
        name="email"
        id="email"
        class="form-control"
        placeholder="Enter your Email"
        required
      />
    </div>

 

    <div class="form-group">
      <p>
        What is your favorite feature of our restaurant?
      </p>
      <select id="most-like" name="mostLike" class="form-control" required>
        <option disabled selected value>Select an option</option>
        <option value="food">Food</option>
        <option value="service">Service</option>
        <option value="menu">Menu</option>
        <option value="prices">Prices&Offers</option>
      </select>
    </div>

    <div class="form-group">
      <p>
        What would you like to see improved?
        <span class="clue">(Check all that apply)</span>
      </p>

      <label
        ><input
          name="prefer"
          value="Food"
          type="checkbox"
          class="input-checkbox"
        />Food</label
      >
    
      <label
        ><input
          name="prefer"
          value="Service Time"
          type="checkbox"
          class="input-checkbox"
        />Service Time</label
      >
      <label
        ><input
          name="prefer"
          value="Service Staff Quality"
          type="checkbox"
          class="input-checkbox"
        />Service Staff Quality</label
      >
      <label
        ><input
          name="prefer"
          value="Menu"
          type="checkbox"
          class="input-checkbox"
        />Menu</label
      >
      <label
        ><input
          name="prefer"
          value="Prices & Offers"
          type="checkbox"
          class="input-checkbox"
        />Prices & Offers</label
      >
      
    </div>

    <div class="form-group">
      <p>Any comments or suggestions?</p>
      <textarea
        id="comments"
        class="input-textarea"
        name="comment"
        placeholder="Enter your comment here..."
      ></textarea>
    </div>

    <div class="form-group">
    <a href="feedback.php"><input type="button" value="Submit" class="btn btn-primary" style="float: center" id="ok"></a>
    
    </div>
  </form>
</div>

</body>
</html>
