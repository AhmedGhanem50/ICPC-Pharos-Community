<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- essential links-->
    <link rel="stylesheet" href="css\navbar.css">

    <title>Admin Training</title>
    <link rel="stylesheet" href="css\Admin.css" />
</head>

<body>
    <?php require "navbar.php"; ?>

    <div class="AP_title">
        <span class="AP_title_span">Admin Training </span>
    </div>
    <div class="container">
        <div class="card two-thirds">
            <div class="card-section">
                <div class="row">
                    <div class="col">
                        <form>
                            <input type="text" placeholder="Name" />
                        </form>
                    </div>

                </div>
                <div class="row">

                    <div class="col">
                        <form>
                            <input type="text" placeholder=" Link" />
                        </form>
                    </div>
                </div>
                <div class="col">
                    <form>
                        <button>Done</button>
                    </form>
                </div>
            </div>
            <div class="card-section">
                <div class="row">
                    <div class="col">
                        <form>
                            <input type="text" value="Problem Name" readonly />
                        </form>
                    </div>
                    <div class="col">
                        <form>
                            <button>Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card one-third">
            <div class="card-section">
                <form>
                    <input type="text" placeholder="Admin Email" />
                </form>
                <form>
                    <button>Done</button>
                </form>
            </div>
            <div class="card-section">
                <div class="row">
                    <div class="col">
                        <form>
                            <input type="text" value="Student Name" readonly />
                        </form>
                    </div>
                    <div class="col">
                        <form>
                            <button>Delete</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>