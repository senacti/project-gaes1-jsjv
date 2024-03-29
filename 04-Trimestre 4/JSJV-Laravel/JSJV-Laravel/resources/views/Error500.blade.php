<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/error_500.css') }}">
    <title>error 500</title>
</head>
<body>
    <div id="particles-js"></div>
    <div class="terminal-window">
      <header>
        <div class="button green"></div>
        <div class="button yellow"></div>
        <div class="button red"></div>
      </header>
      <section class="terminal">
        <div class="history"></div>
        $Error Internal Server &nbsp;<span class="prompt"></span>
        <span class="typed-cursor"></span>
        
      </section>
    </div>
    <!-- data -->
      <div class="terminal-data mimik-run-output">
     <br>Found 1 feature<br>
     ----------------------------------------------<br>
     Feature: Bottles  <span class="gray"># ./features/bottles.feature</span><br><br> 
    
     &nbsp;&nbsp;Scenario: A bottle falls from the wall<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<span class="green">✓</span> <span class="gray">Given 100 green bottles are standing</span><br>
     &nbsp;&nbsp;&nbsp;&nbsp;<span class="green">✓</span> <span class="gray">when 1 green bottle accidentally falls</span><br>
     &nbsp;&nbsp;&nbsp;&nbsp;<span class="green">✓</span> <span class="gray">then there are 99 green bottles standing</span><br>
     <br>
        <span class="gray">&nbsp;---------- ----------- ------- -------- --------</span><br>
    &nbsp;&nbsp;Features&nbsp;&nbsp;&nbsp;Scenarios&nbsp;&nbsp;&nbsp;Steps&nbsp;&nbsp;&nbsp;Passed&nbsp;&nbsp;&nbsp;Failed<br>
        <span class="gray">&nbsp;---------- ----------- ------- -------- --------</span><br>
    &nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="green">✓ 4</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0      <br>
      <br>
    &nbsp;&nbsp;Completed 1 feature in 0.01s<br>
      <br>
    </div>
<script src="{{ asset('js/error_500.js') }}"></script>
</html>