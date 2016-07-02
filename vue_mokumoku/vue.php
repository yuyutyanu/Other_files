<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>vue</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="./master.css" media="screen" title="no title" charset="utf-8">
</head>

<body>


    <div id="app">
      <div id ="nav">
        <p @click="route('nextpage')">次のページへ</p>
        <p @click="route('home')">前のページへ戻る</p>
      </div>

        <component :is="current"></component>

        <template id="nextpage">
            <h1><?php if(isset($_POST['name'])){ echo $_POST['name'];}?>さんへ</h1>
            <a href="https://github.com/yuyutyanu">fllow me</a>
        </template>

        <template id="home">
            <h1>ようこそ{{name}}<?php if(isset($_POST['name'])){ echo $_POST['name'];}?></h1>
            <p>input your name</p>
            <form  action="#" method="post">
                <input v-model="name" name="name">
                <input type="submit" @click="alert">
            </form>
            <br>
            {{name.length}}/10
            <div v-if="name.length > 10">
                <p>長い名前　：)</p>
            </div>
        </template>

    </div>
    <script src="./practice.js" charset="utf-8"></script>
</body>

</html>
