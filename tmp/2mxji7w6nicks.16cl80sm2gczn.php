<!DOCTYPE html>
    <!---
    Author: Ted Ginn
    11/09/2017
    Shows users profile--->

        <html lang="en">

            <head>

                <title>Camp Sambica Sign up</title>
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta charset="utf-8">
                <meta name="description" content="">
                <meta name="author" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="/328/dating/styles/stylesheet.css" type="text/css" rel="stylesheet"/>
                <!-- bootstrap -->
                <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
                      rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                <script src="./js/sorttable.js"></script>
                <!--[if lt IE 9]>
                <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->
                <link rel="shortcut icon" href="">
                <!--jquery-->
                <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
                <script src="//code.jquery.com/jquery-1.10.2.js"></script>
                <link href="css/displayMembers.css" rel="stylesheet" media="screen">


            </head>
            
            <body>
                
            <nav class="navbar navbar-default" id="nav">
                <div class="container-fluid">
                    <div class="navbar-brand">
                        <p>Camp Sambica</p>
                    </div>
                    <ul class="nav navbar-nav">
                        <li ><a href="./">Home</a></li>
                        <li><a href="./information_form">New Camper</a></li>
                        <li><a href="./activities">Edit Activities</a></li>
                        <li class="active"><a href="./displaymembers">View Members</a></li>
                        <li><a href="./logout">Logout</a></li>

                    </ul>
                </div>
            </nav>
            
            <div id="tableWrapper">
                <div class="container-fluid">
                <a href="./displaymembers"><button type="button" class="btn btn-info pull-right">
                    <span class="glyphicon glyphicon-chevron-left"></span> Go Back
                </button></a>
                
                 <table class='table table-striped sortable'>
                                <thead>
                                    <th>Edit</th>
                                    <th>Name</th>
                                    <th>Counselor</th>
                                    <th>Activity One</th>
                                    <th>Activity Two</th>
                                    <th>Activity Three</th>
                                    <th>Activity Four</th>
                                    <th>Activity Five</th>
                                    <th>Activity Six</th>
                                    <th>Activity Seven</th>
                                    <th>Activity Eight</th>
                                    <th>Activity Nine</th>
                                    <th>Activity Ten</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    <?php foreach (($members?:[]) as $member): ?>
    
                                        <tr>
                                            <td><a href="./display_search/<?= ($member['member_id']) ?>">
                                                <span class="glyphicon glyphicon-pencil text-success"></span>
                                            </a></td>
                                            <td><?= ($member['fname']) ?> <?= ($member['lname']) ?></td>
                                            <td><?= ($member['counselor']) ?></td>
                                            <td><?= ($member['activityOne']) ?></td>
                                            <td><?= ($member['activityTwo']) ?></td>
                                            <td><?= ($member['activityThree']) ?></td>
                                            <td><?= ($member['activityFour']) ?></td>
                                            <td><?= ($member['activityFive']) ?></td>
                                            <td><?= ($member['activitySix']) ?></td>
                                            <td><?= ($member['activitySeven']) ?></td>
                                            <td><?= ($member['activityEight']) ?></td>
                                            <td><?= ($member['activityNine']) ?></td>
                                            <td><?= ($member['activityTen']) ?></td>
                                            <td><a href="./delete/<?= ($activeActivity['activity_id']) ?>">
                                                <span class="glyphicon glyphicon-remove text-danger"></span>
                                            </a></td>
                                        </tr>
                    
                                    <?php endforeach; ?>
                                </tbody>
                        </table>
                 </div>
            </div>
            </body>
        </html>