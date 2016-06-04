<!-- END MESSAGE BOX-->
<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>                    
                <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="<?php echo site_url('admin/logout'); ?>" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->

<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->    
<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script   src="https://code.jquery.com/jquery-1.10.1.js"   integrity="sha256-663tSdtipgBgyqJXfypOwf9ocmvECGG8Zdl3q+tk+n0="   crossorigin="anonymous"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
    $(function () {
        $('#container').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: 'Pengunjung bulanan website'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: <?php echo json_encode($bulan); ?>
            },
            yAxis: {
                title: {
                    text: 'Pengunjung'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Pengunjung',
                data: <?php echo json_encode($data); ?>
            }]
        });
});
</script>
<script type="text/javascript">
    $(function () {
    $('#container-postingan').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Penayangan artikel terfaforit'
        },
        xAxis: {
            categories: <?php echo json_encode($tittle); ?>
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Penayangan'
            }
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'Tampilan artikel',
            data: <?php echo json_encode($opencount); ?>
        }]
    });
});
</script>
<script type="text/javascript">
 /**
 * Sand-Signika theme for Highcharts JS
 * @author Torstein Honsi
 */

// Load the fonts
Highcharts.createElement('link', {
   href: 'https://fonts.googleapis.com/css?family=Signika:400,700',
   rel: 'stylesheet',
   type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);

// Add the background image to the container
Highcharts.wrap(Highcharts.Chart.prototype, 'getContainer', function (proceed) {
   proceed.call(this);
   this.container.style.background = 'url(http://www.highcharts.com/samples/graphics/sand.png)';
});


Highcharts.theme = {
   colors: ["#1CAF9A", "#f45b5b", "#8d4654", "#8085e9", "#7798BF", "#ff0066", "#eeaaee",
      "#55BF3B", "#DF5353", "#aaeeee", "#aaeeee"],
   chart: {
      backgroundColor: null,
      style: {
         fontFamily: "Signika, serif"
      }
   },
   title: {
      style: {
         color: 'black',
         fontSize: '16px',
         fontWeight: 'bold'
      }
   },
   subtitle: {
      style: {
         color: 'black'
      }
   },
   tooltip: {
      borderWidth: 0
   },
   legend: {
      itemStyle: {
         fontWeight: 'bold',
         fontSize: '13px'
      }
   },
   xAxis: {
      labels: {
         style: {
            color: '#6e6e70'
         }
      }
   },
   yAxis: {
      labels: {
         style: {
            color: '#6e6e70'
         }
      }
   },
   plotOptions: {
      series: {
         shadow: true
      },
      candlestick: {
         lineColor: '#404048'
      },
      map: {
         shadow: false
      }
   },

   // Highstock specific
   navigator: {
      xAxis: {
         gridLineColor: '#D0D0D8'
      }
   },
   rangeSelector: {
      buttonTheme: {
         fill: 'white',
         stroke: '#C0C0C8',
         'stroke-width': 1,
         states: {
            select: {
               fill: '#D0D0D8'
            }
         }
      }
   },
   scrollbar: {
      trackBorderColor: '#C0C0C8'
   },

   // General
   background2: '#E0E0E8'

};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);
</script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/jquery/jquery-ui.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/bootstrap/bootstrap.min.js'); ?>"></script>        
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
       
<script type='text/javascript' src='<?php echo base_url('assets/js/plugins/icheck/icheck.min.js'); ?>'></script>        
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/scrolltotop/scrolltopcontrol.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/morris/raphael-min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/morris/morris.min.js'); ?>"></script>       
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/rickshaw/d3.v3.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/rickshaw/rickshaw.min.js'); ?>"></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>'></script>                
<script type='text/javascript' src='<?php echo base_url('assets/js/plugins/bootstrap/bootstrap-datepicker.js'); ?>'></script>                
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/owl/owl.carousel.min.js'); ?>"></script>                 
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/moment.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/plugins/icheck/icheck.min.js'); ?>'></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/plugins/icheck/icheck.min.js'); ?>'></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'); ?>"></script>        
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/codemirror/codemirror.js'); ?>"></script>        
<script type='text/javascript' src="<?php echo base_url('assets/js/plugins/codemirror/mode/htmlmixed/htmlmixed.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('assets/js/plugins/codemirror/mode/xml/xml.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('assets/js/plugins/codemirror/mode/javascript/javascript.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('assets/js/plugins/codemirror/mode/css/css.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('assets/js/plugins/codemirror/mode/clike/clike.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('assets/js/plugins/codemirror/mode/php/php.js'); ?>"></script>    
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/summernote/summernote.js'); ?>"></script> 
<script type='text/javascript' src="<?php echo base_url('assets/js/plugins/icheck/icheck.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/blueimp/jquery.blueimp-gallery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/dropzone/dropzone.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/dropzone/dropzone.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/icheck/icheck.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/fileinput/fileinput.min.js'); ?>"></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/plugins/icheck/icheck.min.js'); ?>'></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'); ?> "></script>      
<script type='text/javascript' src='<?php echo base_url('assets/js/plugins/bootstrap/bootstrap-datepicker.js'); ?>'></script>        
<script type='text/javascript' src='<?php echo base_url('assets/js/plugins/bootstrap/bootstrap-select.js'); ?>'></script>        
<script type='text/javascript' src='<?php echo base_url('assets/js/plugins/validationengine/languages/jquery.validationEngine-en.js'); ?>'></script>
<script type='text/javascript' src='<?php echo base_url('assets/js/plugins/validationengine/jquery.validationEngine.js'); ?>'></script>        
<script type='text/javascript' src='<?php echo base_url('assets/js/plugins/jquery-validation/jquery.validate.js'); ?>'></script>                
<script type='text/javascript' src='<?php echo base_url('assets/js/plugins/maskedinput/jquery.maskedinput.min.js'); ?>'></script>
<!-- END THIS PAGE PLUGINS-->        

<!-- START TEMPLATE -->
<script type="text/javascript" src="<?php echo base_url('assets/js/settings.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>        
<script type="text/javascript" src="<?php echo base_url('assets/js/actions.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/demo_dashboard.js'); ?>"></script>
<!-- END TEMPLATE -->
<script>            
    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement;
        var link = target.src ? target.parentNode : target;
        var options = {index: link, event: event,onclosed: function(){
            setTimeout(function(){
                $("body").css("overflow","");
            },200);                        
        }};
        var links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
</script>
<!-- END SCRIPTS -->

</body>
</html>