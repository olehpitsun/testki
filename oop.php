<!DOCTYPE html>
<html>
<head>
        <title>Live Search using Vue.js with PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.10/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.min.js"></script>

</head>
<body>
<div id="myapp">
        <div class="container">
                <h1 class="page-header text-center">Live Search using Vue.js with PHP</h1>
                <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                                <div class="col-md-4 col-md-offset-8">
                                        <input type="text" class="form-control" placeholder="Search Firstname or Lastname" v-on:keyup="searchMonitor" v-model="search.keyword">
                                </div>
                        </div>
                        <div style="height:5px;"></div>
                        <table class="table table-bordered table-striped">
                                <thead>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                </thead>
                                <tbody>

                                                <tr v-if="noMember">
                                                        <td colspan="2" align="center">No member match your search</td>
                                                </tr>

                                        <tr v-for="member in members">
                                                <td>{{ member.firstname }}</td>
                                                <td>{{ member.lastname }}</td>
                                        </tr>
                                </tbody>
                        </table>
                </div>
        </div>
</div>
<script src="app.js"></script>
</body>
</html>