<?php
get_header();
?>

    <div class="herobanner">
        <div class="herotext">
            <p class="heroheading">Increase your productivity</p>
            <p class="herosubtext">Attainment of higher productivity is one of the main aims of any business enterprise. 
                Higher productivity ensures lesser cost of production, 
                higher production and most effective utilisation of available resources.</p>
        </div>
    </div>
    <div class="maincontent">
        <div class="pomodoro">
            <p id="active">Work</p>
            <div class="timer">
                <p id="minutes"></p>
                <p>:</p>
                <p id="seconds"></p>
            </div>
            <div class="controls">
                    <button data-text="Awesome" class="button" id="start" onclick="start()">
                        <span class="actual-text">start</span>
                        <span class="hover-text" aria-hidden="true">start</span>
                    </button>
                    <button data-text="Awesome" class="button" onclick="stop()">
                        <span class="actual-text">reset</span>
                        <span class="hover-text" aria-hidden="true">reset</span>
                    </button>
            </div>
            <p id="breakcounter"></p>
        </div>
        <div class="timerimg"></div>
    </div>        

<?php
get_footer();
?>