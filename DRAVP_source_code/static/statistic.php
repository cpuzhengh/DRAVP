<!DOCTYPE html>
<html lang="en">
<head>
        <title>Welcome To DRAVP</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="http://dravp.cpu-bioinfor.org/lazysheep/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://dravp.cpu-bioinfor.org/lazysheep/css/private.css">
    <link rel="stylesheet" type="text/css" href="http://dravp.cpu-bioinfor.org/lazysheep/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="http://dravp.cpu-bioinfor.org/lazysheep/css/public.css">
    <script language="Javascript" src="http://dravp.cpu-bioinfor.org/lazysheep/js/jquery-1.11.1.js"></script>
    <script language="JavaScript" src="http://dravp.cpu-bioinfor.org/lazysheep/js/bootstrap.js"></script>
    <script src="http://dravp.cpu-bioinfor.org/static/highcharts/Highcharts-10.0.0/code/highcharts.js"></script>
    <script src="http://dravp.cpu-bioinfor.org/static/highcharts/Highcharts-10.0.0/code/modules/exporting.src.js"></script>
   
</head>


<body>

<?php

          require_once ("../head/head_content.php");

?>

<div class="container">


    <div class="row" style="margin-top:90px;">
        <ol class="breadcrumb">
            <li><a href="http://dravp.cpu-bioinfor.org">Home</a></li>
            <li class="active">Statistic</li>
        </ol>
    </div>
    
    <h4 style="font-weight:bold;font-size:20px;">1. Composition of DRAVP according to the dataset of peptides belongs to</h4>
    <div id="dataset_composition" style="min-width: 600px;height:550px;margin:50px 50px 40px 30px;"></div>
    <script>
       var chart = Highcharts.chart('dataset_composition', {
        	chart: {
        		spacing : [40, 0 , 40, 0]
        	},
        	title: {
        		floating:true,
        		text: 'Dataset Composition'
                // text: null
        	},
        	tooltip: {
        // 		pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        	},
        	plotOptions: {
        		pie: {
        			allowPointSelect: true,
        			cursor: 'pointer',
        			dataLabels: {
        				enabled: true,
        				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
        				style: {
        					color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
        				}
        			},
        			point: {
        				events: {
        					mouseOver: function(e) { 
        						chart.setTitle({
        							text: e.target.name+ '\t'+ e.target.y
        						});
        					}
        				}
        			},
        		}
        	},
        	series: [{
        		type: 'pie',
        		innerSize: '60%',
        		name: 'Number',
        		data: [
        			{name:'Antiviral peptides',   y: 2765},
        			['Patent peptides',       2626],
        			{
        				name: 'Clinical data',
        				y: 78,
        				sliced: true,
        				selected: true,
        			},
					{ name: 'Specific Data', y: 43 },
        			['Antiviral proteins',    176]
        		]
        	}]
        }, function(c) {
        	var centerY = c.series[0].center[1],
        		titleHeight = parseInt(c.title.styles.fontSize);
        	c.setTitle({
        		y:centerY + titleHeight/2
        	});
        });
    </script>
    
    <h4 style="font-weight:bold;font-size:20px;">2. Distribution of lengths for peptides from General dataset</h4>
    <div id="length" style="min-width:1000px;height:550px;margin:50px 50px 40px 30px;"></div>
    <script>
        var options = {
        	chart: {
        		type: 'column' 
        	},
        	title: {
        		text: null
        	},
        	tooltip: {
        	    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        		pointFormat: '<span style="color:{point.color}">Length {point.name}</span>: <b>{point.y}</b><br/>'
        	},
        	xAxis: {
        		title:{
        			text:'Length'
        		},
        		type: 'category',
        	},
        	yAxis: {
        		title: {
        			text: 'Count'
        		},
        	},
        	series: [{
        		colorByPoint: true,
        		name:'Number',
        		showInLegend: false,
        		data:[
        		    ['2', 2],
        		    ['3', 8],
        			['4', 17],
        			['5', 47],
        			['6', 63],
        			['7', 27],
        			['8', 87],
        			['9', 169],
        			['10', 64],
        			['11', 53],
        			['12', 118],
        			['13', 251],
        			['14', 85],
        			['15', 263],
        			['16', 36],
        			['17', 53],
        			['18', 213],
        			['19', 76],
        			['20', 241],
        			['21', 89],
        			['22', 31],
        			['23', 42],
        			['24', 38],
        			['25', 47],
        			['26', 31],
        			['27', 25],
        			['28', 42],
        			['29', 37],
        			['30', 37],
        			['31', 27],
        			['32', 21],
        			['33', 31],
        			['34', 19],
        			['35', 83],
        			['36', 74],
        			['37', 44],
        			['38', 30],
        			['39', 10],
        			['40', 15],
        			['41', 35],
        			['42', 18],
        			['43', 4],
        			['44', 1],
        			['45', 11],
        			['46', 6],
        			['48', 6],
        			['49', 4],
        			['50', 2],
        			['52', 2],
        			['55', 1],
        			['56', 5],
        			['59', 1],
        			['60', 4],
        			['61', 1],
        			['62', 2],
        			['64', 3],
        			['66', 1],
        			['68', 2],
        			['75', 1],
        			['76', 1],
        			['85', 1],
        			['87', 1],
        			['88', 1],
					['96', 1]
        		],
        		dataLabels: {
        			enabled: true,
        			format: '{point.y}',
        			y: 10
        		}
        	}],
        }
        var chart = Highcharts.chart('length', options);
    </script>

    <h4 style="font-weight:bold;font-size:20px;">3. Amino acid composition of peptides from General dataset</h4>
    <div id="amino_acid_composition" style="min-width: 550px;height:550px;margin:50px 50px 40px 30px;"></div>
    <script>
        var options = {
            chart: {
        		type: 'column'
        	},
        	title: {
        		text: null
        	},
        	xAxis: {
        		type: 'category'
        	},
        	yAxis: {
        		title: {
        			text: 'Percent(%)'
        		}
        	},
        	legend: {
        		enabled: false
        	},
        	plotOptions: {
        		series: {
        			borderWidth: 0,
        			dataLabels: {
        				enabled: true,
        				format: '{point.y:.1f}%'
        			}
        		}
        	},
        	tooltip: {
        		headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        		pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b><br/>'
        	},
        	series: [{
        		name: 'Amino acid percentage',
        		colorByPoint: true,
        		data: [{
        			name: 'Alanine',
        			y: 6.68,
        		}, {
        			name: 'Arginine',
        			y: 5.99,
        		}, {
        			name: 'Asparagine',
        			y: 4.23,
        		}, {
        			name: 'Aspartic acid',
        			y: 3.94,
        		}, {
        			name: 'Cysteine',
        			y: 2.78,
        		}, {
        			name: 'Glutamic acid',
        			y: 7.40,
        		},{
        			name: 'Glutamine',
        			y: 4.10,
        		}, {
        			name: 'Glycine',
        			y: 5.14,
        		}, {
        			name: 'Histidine',
        			y: 1.89,
        		}, {
        			name: 'Isoleucine',
        			y: 6.36,
        		}, {
        			name: 'Leucine',
        			y: 10.88,
        		}, {
        			name: 'Lysine',
        			y: 9.34,
        		},{
        			name: 'Methionine',
        			y: 1.28,
        		}, {
        			name: 'Phenylalanine',
        			y: 4.09,
        		}, {
        			name: 'Proline',
        			y: 3.46,
        		},{
        			name: 'Serine',
        			y: 5.43,
        		}, {
        			name: 'Threonine',
        			y: 4.04,
        		}, {
        			name: 'Tryptophan',
        			y: 2.99,
        		}, {
        			name: 'Tyrosine',
        			y: 2.85,
        		}, {
        			name: 'Valine',
        			y: 5.77,
        		}, {
        			name: 'Unusual amino acid',
        			y: 1.39,
        		}]
        	}]
        }
        var chart = Highcharts.chart('amino_acid_composition', options);
    </script>

    <h4 style="font-weight:bold;font-size:20px;">4. Composition of general dataset according to the Target Organism</h4>
    <div id="target_organism" style="min-width: 550px;height:550px;margin:50px 50px 40px 30px;"></div>
    <script>
        // 图表配置
        var options = {
           chart: {
        		type: 'column'
        	},
        	title: {
        		text: null
        	},
        	xAxis: {
        		type: 'category'
        	},
        	yAxis: {
        		title: {
        			text: 'Count'
        		}
        	},
        	legend: {
        		enabled: false
        	},
        	plotOptions: {
        		series: {
        			borderWidth: 0,
        			dataLabels: {
        				enabled: true,
        				format: '{point.y}'
        			}
        		}
        	},
        	tooltip: {
        		headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        		pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
        	},
        	series: [{
        		name: 'Virus type',
        		colorByPoint: true,
        		data: [{
        			name: 'HIV',
        			y: 834,
        		}, {
        			name: 'HCV',
        			y: 420,
        		}, {
        			name: 'Influenza virus',
        			y: 148,
        		}, {
        			name: 'HSV',
        			y: 344,
        		}, {
        			name: 'SARS-CoV-2',
        			y: 142,
        		}, {
        			name: 'RSV',
        			y: 136,
        		}, {
        			name: 'FIV',
        			y: 109,
        		}, {
        			name: 'DENV',
        			y: 105,
        		}, {
        			name: 'MERS-CoV',
        			y: 68,
        		},{
        			name: 'SARS-CoV',
        			y: 90,
        		},{
        			name: 'HPIV 3',
        			y: 53,
        		}, {
        			name: 'MeV',
        			y: 31,
        		}, {
        			name: 'WNV',
        			y: 35,
        		}, {
        			name: 'JEV',
        			y: 24,
        		},{
        			name: 'HCMV',
        			y: 33,
        		},{
        		    name: 'PRRSV',
        		    y: 15,
        		},{
        		    name: 'VSV',
        		    y: 17,
        		}, {
        			name: 'ZIKV',
        			y: 19,
        		},{
        			name: 'HPV',
        			y: 13,
        		}, {
        			name: 'SIV',
        			y: 10,
        		}, {
        			name: 'MHV',
        			y: 11,
        		}, {
        			name: 'CCV',
        			y: 9,
        		},{
        			name: 'FV3',
        			y: 7,
        		},{
        			name: 'HBV',
        			y: 12,
        		},{
        			name: 'EBOV',
        			y: 63,
        		},{
        			name: 'JV',
        			y: 2,
        		}]
        	}]
        }
        var chart = Highcharts.chart('target_organism', options);
    </script>
    
    <h4 style="font-weight:bold;font-size:20px;">5. Composition of general dataset according to target virus family</h4>
    <div id="family" style="min-width: 550px;height:550px;margin:50px 50px 40px 30px;"></div>
    <script>
        // 图表配置
        var options = {
           chart: {
        		plotBackgroundColor: null,
        		plotBorderWidth: null,
        		plotShadow: false,
        		type: 'pie'
        	},
        	title: {
        		text: null
        	},
        	plotOptions: {
        		pie: {
        			allowPointSelect: true,
        			cursor: 'pointer',
        			dataLabels: {
        				enabled: true,
        				format: '<b>{point.name}</b>: {point.percentage:.1f} %',
        				style: {
        					color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
        				}
        			}
        		}
        	},
        	series: [{
        		name: 'Brands',
        		colorByPoint: true,
        		data: [{
        			name: 'Retroviridae',
        			y: 933,
        		}, {
        			name: 'Flaviviridae',
        			y: 547,
        		}, {
        			name: 'Coronaviridae',
        			y: 312,
        		}, {
        			name: 'Paramyxoviridae',
        			y: 216,
        		}, {
        			name: 'Herpesviridae',
        			y: 383,
        		}, {
        			name: 'Orthomyxoviridae',
        			y: 201,
        		}, {
        			name: 'Iridoviridae',
        			y: 9,
        		},{
        			name: 'Papillomaviridae',
        			y: 13,
        		},{
        			name: 'Hepadnaviridae',
        			y: 12,
        		},{
        			name: 'Arenaviridae',
        			y: 5,
        		},{
        			name: 'Filoviridae',
        			y: 60,
        		}]
        	}]
        }
        var chart = Highcharts.chart('family', options);
    </script>



</div>


<?php

	require_once ("../head/footer.php");


?>

