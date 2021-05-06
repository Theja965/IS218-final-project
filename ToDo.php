
<html>
<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body style="background-image: linear-gradient(to right, #FFEFBA 0%, #FFFFFF 100%)">
<h1 style="text-align: center">TODO Tasks Table</h1>
<nav style="background-image: linear-gradient(to right, #0C96E4 0%, #0ccce4 100%)" class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.html" style="color: whitesmoke">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Completed.html" style="color: whitesmoke">Completed Tasks</a>
            </li>
        </ul>
    </div>
</nav>
<button class="open-button" style="background-image: linear-gradient(to right, #0C96E4 0%, #0ccce4 100%)" onclick="openForm()">Add A Task</button>
<button class="open-button1" style="background-image: linear-gradient(to right, #0C96E4 0%, #0ccce4 100%)"onclick="openForm()">Delete A Task</button>
<button class="open-button2" style="background-image: linear-gradient(to right, #0C96E4 0%, #0ccce4 100%)"onclick="openForm()">Edit A Task</button>


<div class="form-popup" id="myForm">

    <label for="task"><b>Task</b></label>
    <input type="text" placeholder="Enter Your Task" name="Task" required>

    <label for="description"><b>Description</b></label>
    <input type="text" placeholder="Describe Your Task" name="Description" required>

    <label for="urgency"><b>Urgency(1-3)</b></label>
    <input type="number" placeholder="How urgent is your task" name="urgency" required>

    <label for="isdone"><b>IsDone(1/2)</b></label>
    <input type="number" placeholder="1-If task is not complete, 2 if it is complete" name="Description" required>

    <label for="date"><b>Submission Date</b></label>
    <input type="date" placeholder="Completion Date (YYYY-MM-DD)" name="Date" required>

    <button type="submit" class="btn">Submit</button>
    <button type="submit" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
</div>
<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>
</body>

</html>
<br>
<br>
