<div style="text-align : center;" id="starter">

    <?php echo svg_record() ?>
    <h4>Arahkan Wajah ke Camera</h4>
    <p>Camera akan menangkap wajah selama 30 detik</p>

    <button type="button" id="launch-camera" class="btn btn-light-primary">Jalankan Camera</button>

</div>


    <!-- Camera -->
<div style="text-align: center;" id="camera"> 
    
    <div id="webcam"> </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="<?php echo base_url() ?>assets/js/webcam.js"></script>

<script type="text/javascript">
    $(function() //membuka elemen javascript
    {
        var starter = $('#starter');
        var camera = $('#camera');

        $('#launch-camera').click(function(){
            starter.hide(1000);
        });
    })
</script>

<?php
    function svg_record()
    {
        return '<svg style="width: 200px" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 756.4834 771.24242" xmlns:xlink="http://www.w3.org/1999/xlink"><title>moments</title><path d="M721.52783,375.35584a2.659,2.659,0,0,0-2.65625,2.65625V560.37244a2.659,2.659,0,0,0,2.65625,2.65625H975.58545a2.659,2.659,0,0,0,2.65625-2.65625V378.01209a2.659,2.659,0,0,0-2.65625-2.65625Z" transform="translate(-221.7583 -64.37879)" fill="#e6e6e6"/><path d="M961.555,391.66566v129.6a3.26061,3.26061,0,0,1-3.26,3.26h-220a2.31873,2.31873,0,0,1-.46-.04,3.25569,3.25569,0,0,1-2.8-3.22v-129.6a3.26057,3.26057,0,0,1,3.26-3.26h220A3.2606,3.2606,0,0,1,961.555,391.66566Z" transform="translate(-221.7583 -64.37879)" fill="#fff"/><circle cx="694.19778" cy="371.51624" r="11.8189" fill="#ff6584"/><circle cx="504.70505" cy="317.52982" r="3.89659" fill="#3f3d56"/><circle cx="748.37174" cy="317.52982" r="3.89659" fill="#3f3d56"/><circle cx="504.70505" cy="492.097" r="3.89659" fill="#3f3d56"/><circle cx="748.37174" cy="492.097" r="3.89659" fill="#3f3d56"/><circle cx="585.76023" cy="403.73305" r="14.18014" fill="#4444f7"/><polygon points="587.127 446.444 584.223 446.444 585.547 401.597 587.127 446.444" fill="#3f3d56"/><polygon points="585.803 410.097 588.921 405.783 585.76 411.165 585.419 410.567 585.803 410.097" fill="#3f3d56"/><polygon points="585.461 414.454 582.343 410.14 585.504 415.521 585.846 414.923 585.461 414.454" fill="#3f3d56"/><circle cx="715.83653" cy="403.73305" r="14.18014" fill="#4444f7"/><polygon points="717.203 446.444 714.299 446.444 715.623 401.597 717.203 446.444" fill="#3f3d56"/><polygon points="715.879 410.097 718.997 405.783 715.837 411.165 715.495 410.567 715.879 410.097" fill="#3f3d56"/><polygon points="715.538 414.454 712.42 410.14 715.58 415.521 715.922 414.923 715.538 414.454" fill="#3f3d56"/><circle cx="626.83759" cy="391.36332" r="20.94289" fill="#4444f7"/><polygon points="628.856 454.444 624.567 454.444 626.522 388.209 628.856 454.444" fill="#3f3d56"/><polygon points="626.901 400.762 631.506 394.391 626.838 402.339 626.333 401.456 626.901 400.762" fill="#3f3d56"/><polygon points="626.396 407.197 621.791 400.825 626.459 408.774 626.964 407.891 626.396 407.197" fill="#3f3d56"/><circle cx="677.91049" cy="383.36332" r="20.94289" fill="#4444f7"/><polygon points="679.929 446.444 675.64 446.444 677.595 380.209 679.929 446.444" fill="#3f3d56"/><polygon points="677.974 392.762 682.578 386.391 677.91 394.339 677.406 393.456 677.974 392.762" fill="#3f3d56"/><polygon points="677.469 399.197 672.864 392.825 677.532 400.774 678.037 399.891 677.469 399.197" fill="#3f3d56"/><circle cx="545.44015" cy="383.36332" r="20.94289" fill="#4444f7"/><polygon points="547.459 446.444 543.169 446.444 545.125 380.209 547.459 446.444" fill="#3f3d56"/><polygon points="545.503 392.762 550.108 386.391 545.44 394.339 544.935 393.456 545.503 392.762" fill="#3f3d56"/><polygon points="544.999 399.197 540.394 392.825 545.062 400.774 545.566 399.891 544.999 399.197" fill="#3f3d56"/><path d="M849.765,524.52565H738.295a2.31873,2.31873,0,0,1-.46-.04,3.25569,3.25569,0,0,1-2.8-3.22v-27.83a189.75911,189.75911,0,0,1,31.74-2.58c39.57,0,72.67,11.34,80.97,26.52A15.25182,15.25182,0,0,1,849.765,524.52565Z" transform="translate(-221.7583 -64.37879)" fill="#3f3d56"/><path d="M961.555,514.95564v6.31a3.26061,3.26061,0,0,1-3.26,3.26H834.965a62.86069,62.86069,0,0,1,12.78-7.15c15.11005-6.48,36.42-10.52,60.03-10.52C928.295,506.85566,947.065,509.89564,961.555,514.95564Z" transform="translate(-221.7583 -64.37879)" fill="#3f3d56"/><path d="M862.88232,64.37879a2.64744,2.64744,0,0,0-1.24414.3125l-224.2998,119.311a2.66049,2.66049,0,0,0-1.09668,3.59277l85.63965,161a2.66021,2.66021,0,0,0,3.59375,1.09814l224.29883-119.311a2.66,2.66,0,0,0,1.09765-3.59277l-85.64062-161a2.63828,2.63828,0,0,0-1.56934-1.29346A2.66893,2.66893,0,0,0,862.88232,64.37879Z" transform="translate(-221.7583 -64.37879)" fill="#e6e6e6"/><path d="M856.91328,85.67873l60.86083,114.41553a3.26168,3.26168,0,0,1-1.34832,4.41285L722.1983,307.82217a2.75021,2.75021,0,0,1-.42991.18748,3.25969,3.25969,0,0,1-3.98293-1.5358L656.92462,192.05832a3.26164,3.26164,0,0,1,1.34834-4.41282L852.50044,84.33044A3.26167,3.26167,0,0,1,856.91328,85.67873Z" transform="translate(-221.7583 -64.37879)" fill="#fff"/><circle cx="505.33769" cy="141.51373" r="28.62439" fill="#ff6584"/><path d="M847.77,241.61551,723.7954,307.5611a2.86449,2.86449,0,0,1-.4828.20973l4.61006-132.75227a4.6501,4.6501,0,0,1,7.14639-3.80137L810.67447,218.442l3.62,2.25849Z" transform="translate(-221.7583 -64.37879)" fill="#3f3d56"/><polygon points="626.012 177.237 583.684 199.752 588.408 158.518 588.747 155.548 588.916 154.063 592.536 156.322 626.012 177.237" opacity="0.2"/><path d="M916.79823,204.89747,809.57036,261.935l4.72413-41.23452.33878-2.96961,6.15432-53.73536c.40391-3.52207,4.58892-5.95415,7.87393-4.81214a5.54073,5.54073,0,0,1,.64853.27881Z" transform="translate(-221.7583 -64.37879)" fill="#3f3d56"/><circle cx="423.01582" cy="123.09118" r="3.89659" fill="#3f3d56"/><circle cx="638.14123" cy="8.65993" r="3.89659" fill="#3f3d56"/><circle cx="504.99642" cy="277.21088" r="3.89659" fill="#3f3d56"/><circle cx="720.12183" cy="162.77963" r="3.89659" fill="#3f3d56"/><path d="M917.19287,835.53162a2.66049,2.66049,0,0,0,3.25-1.88476l46.88086-176.23145a2.65676,2.65676,0,0,0-1.88477-3.25l-245.51953-65.3125a2.65795,2.65795,0,0,0-3.25,1.88477L669.78955,766.96912a2.65591,2.65591,0,0,0,1.88477,3.25Z" transform="translate(-221.7583 -64.37879)" fill="#e6e6e6"/><path d="M947.68743,666.32033,914.3705,791.56463A3.26061,3.26061,0,0,1,910.382,793.877L697.77587,737.32049a2.31951,2.31951,0,0,1-.43428-.15689,3.25569,3.25569,0,0,1-1.87809-3.83162l33.31692-125.24431a3.26057,3.26057,0,0,1,3.98851-2.31238l212.60612,56.55652A3.26061,3.26061,0,0,1,947.68743,666.32033Z" transform="translate(-221.7583 -64.37879)" fill="#fff"/><path d="M919.10325,773.77339l-4.73275,17.79124A3.26061,3.26061,0,0,1,910.382,793.877L697.77587,737.32049a2.31951,2.31951,0,0,1-.43428-.15689,3.25569,3.25569,0,0,1-1.87809-3.83162l4.73274-17.79124Z" transform="translate(-221.7583 -64.37879)" fill="#3f3d56"/><rect x="790.23801" y="755.60062" width="35" height="4" transform="translate(0.14887 -246.56624) rotate(14.89658)" fill="#ccc"/><rect x="712.4435" y="734.90607" width="35" height="4" transform="translate(-7.78575 -227.26272) rotate(14.89658)" fill="#ccc"/><rect x="868.03252" y="776.29516" width="35" height="4" transform="translate(8.08348 -265.86976) rotate(14.89658)" fill="#ccc"/><circle cx="501.24686" cy="532.0762" r="3.89659" fill="#3f3d56"/><circle cx="736.72426" cy="594.71684" r="3.89659" fill="#3f3d56"/><circle cx="456.36999" cy="700.77643" r="3.89659" fill="#3f3d56"/><circle cx="691.84739" cy="763.41706" r="3.89659" fill="#3f3d56"/><rect x="866.88787" y="765.12295" width="19.45264" height="3.08772" transform="matrix(-0.96625, -0.25759, 0.25759, -0.96625, 1304.40081, 1668.89127)" fill="#3f3d56"/><path d="M731.51554,727.18638l3.64,1.929,147.386,39.29132,2.14705-2.73571a32.257,32.257,0,0,0,6.77567-16.24608c.49976-4.43415.03629-9.09549-3.08735-11.89748l5.04866-45.30923L811.91165,670.378l-38.32226,17.0556s-14.81257-4.22686-25.57635,3.68865a24.44966,24.44966,0,0,0-8.40416,11.69857l-1.71215,5.15178Z" transform="translate(-221.7583 -64.37879)" fill="#4444f7"/><circle cx="542.32729" cy="670.69148" r="18.83509" fill="#3f3d56"/><circle cx="542.32729" cy="670.69148" r="9.91321" fill="#ccc"/><circle cx="632.13128" cy="694.63214" r="18.83509" fill="#3f3d56"/><circle cx="632.13128" cy="694.63214" r="9.91321" fill="#ccc"/><polygon points="565.159 623.415 609.185 635.147 614.56 636.577 623.634 638.998 623.81 638.335 625.939 630.357 628.329 621.398 622.292 619.792 616.918 618.356 607.399 615.817 602.024 614.387 591.034 611.457 565.159 623.415" fill="#fff"/><polygon points="630.796 640.91 654.064 647.113 655.285 642.548 657.407 634.569 658.759 629.514 655.352 628.607 649.978 627.171 635.485 623.309 630.796 640.91" fill="#fff"/><rect x="838.10172" y="716.01073" width="3.08772" height="5.86667" transform="matrix(-0.96625, -0.25759, 0.25759, -0.96625, 1244.00411, 1565.53343)" fill="#3f3d56"/><rect x="792.72161" y="693.84694" width="3.08772" height="5.86667" transform="translate(1450.36994 44.42414) rotate(104.9272)" fill="#3f3d56"/><path d="M790.043,683.2363h.33966a6.45333,6.45333,0,0,1,6.45333,6.45333v0a6.45333,6.45333,0,0,1-6.45333,6.45333H790.043a0,0,0,0,1,0,0V683.2363A0,0,0,0,1,790.043,683.2363Z" transform="translate(1160.68699 1496.1095) rotate(-165.0728)" fill="#3f3d56"/><path d="M737.89673,707.97261A9.97473,9.97473,0,0,0,748.013,691.12226a24.44966,24.44966,0,0,0-8.40416,11.69857Z" transform="translate(-221.7583 -64.37879)" fill="#3f3d56"/><polygon points="616.918 618.356 623.81 638.335 625.939 630.357 622.292 619.792 616.918 618.356" fill="#f2f2f2"/><polygon points="649.978 627.171 655.285 642.548 657.407 634.569 655.352 628.607 649.978 627.171" fill="#f2f2f2"/><polygon points="602.024 614.387 609.185 635.147 614.56 636.577 607.399 615.817 602.024 614.387" fill="#f2f2f2"/><circle cx="40.01667" cy="298.31341" r="12" fill="#4444f7"/><path d="M266.84016,351.82508a11.984,11.984,0,0,1-13.13049,19.73407,11.98967,11.98967,0,1,0,13.13049-19.73407Z" transform="translate(-221.7583 -64.37879)" opacity="0.2"/><ellipse cx="348.51667" cy="311.31341" rx="29.5" ry="12" fill="#3f3d56"/><path d="M570.275,363.6922q-1.51913,0-3,.06147c14.88324.61151,26.5,5.72308,26.5,11.93853s-11.61676,11.327-26.5,11.93854q1.47978.06079,3,.06146c16.29242,0,29.5-5.37262,29.5-12S586.56739,363.6922,570.275,363.6922Z" transform="translate(-221.7583 -64.37879)" opacity="0.2"/><path d="M608.775,375.6922h-148v-16a3,3,0,0,0-3-3h-82a3,3,0,0,0-3,3v16h-86v-10a3,3,0,0,0-3-3h-44a3,3,0,0,0-3,3v10h-12a2.996,2.996,0,0,0-3,3v197a2.996,2.996,0,0,0,3,3h384a2.996,2.996,0,0,0,3-3v-197A2.996,2.996,0,0,0,608.775,375.6922Z" transform="translate(-221.7583 -64.37879)" fill="#3f3d56"/><path d="M608.7583,564.00037h-384a2.996,2.996,0,0,1-3-3v14a2.996,2.996,0,0,0,3,3h384a2.996,2.996,0,0,0,3-3v-14A2.996,2.996,0,0,1,608.7583,564.00037Z" transform="translate(-221.7583 -64.37879)" opacity="0.2"/><rect x="0.01667" y="403.31341" width="390" height="38" opacity="0.2"/><rect x="0.01667" y="384.31341" width="390" height="38" opacity="0.2"/><rect x="0.01667" y="393.31341" width="390" height="38" fill="#4444f7"/><circle cx="195.01667" cy="412.31341" r="76" fill="#4444f7"/><path d="M475.31532,428.228a75.99569,75.99569,0,0,1-124.08069,86.92835A75.99623,75.99623,0,1,0,475.31532,428.228Z" transform="translate(-221.7583 -64.37879)" opacity="0.2"/><circle cx="195.01667" cy="412.31341" r="56.55814" fill="#3f3d56"/><path d="M460.775,476.6922a43.723,43.723,0,0,1-3.57,17.37,43.131,43.131,0,0,1-4.75,8.37,43.99842,43.99842,0,1,1-61.42-61.42,43.12475,43.12475,0,0,1,8.37-4.75,44.00517,44.00517,0,0,1,61.37,40.43Z" transform="translate(-221.7583 -64.37879)" fill="#fff"/><path d="M460.305,470.28217a43.92832,43.92832,0,0,0-16.44751-28.26538A44.00211,44.00211,0,0,1,447.205,483.0622a43.131,43.131,0,0,1-4.75,8.37,43.973,43.973,0,0,1-62.76929,8.91852,43.9784,43.9784,0,0,0,72.76929,2.08148,43.131,43.131,0,0,0,4.75-8.37,44.01773,44.01773,0,0,0,3.1-23.78Z" transform="translate(-221.7583 -64.37879)" opacity="0.2"/></svg>';
    }
?>