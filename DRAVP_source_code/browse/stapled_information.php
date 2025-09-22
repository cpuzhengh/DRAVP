<?php
header('Content-Type:text/html; charset=utf-8');
date_default_timezone_set('PRC');

$conn=@mysqli_connect('localhost','root','ZhengH@123','dravp') or die('连接错误！请检查网络');
mysqli_query($conn,'set names utf8');

@$tit=$_GET['id'];


function escapeString($content) {
    $pattern = "/(select[\s])|(insert[\s])|(update[\s])|(delete[\s])|(from[\s])|(where[\s])|(drop[\s])/i";
    if (is_array($content)) {
        foreach ($content as $key=>$value) {
            $content[$key] = addslashes(trim($value));
            if(preg_match($pattern,$content[$key])) {
                $content[$key] = '';
            }
        }
    } else {
        $content=addslashes(trim($content));
        if(preg_match($pattern,$content)) {
            echo '<script>location.href="http://dravp.cpu-bioinfor.org/"</script>';exit;
        }
    }
    return $content;
}
function safe_replace($string) {
    $string = str_replace('%20','',$string);
    $string = str_replace('%27','',$string);
    $string = str_replace('%2527','',$string);
    $string = str_replace('*','',$string);
    $string = str_replace('"','&quot;',$string);
    $string = str_replace("'",'',$string);
    $string = str_replace('"','',$string);
    $string = str_replace(';','',$string);
    $string = str_replace('<','&lt;',$string);
    $string = str_replace('>','&gt;',$string);
    $string = str_replace("{",'',$string);
    $string = str_replace('}','',$string);
    $string = str_replace('\\','',$string);
    return $string;
}
$tit=escapeString($tit);
$tit=safe_replace($tit);

$sql="select * from stapled_peptides where DRAVP_ID='$tit'";
$rs=mysqli_query($conn,$sql);

if(mysqli_num_rows($rs)>0){
    $row=mysqli_fetch_assoc($rs);
}else{
    echo '<script>location.href="http://dravp.cpu-bioinfor.org/"</script>';exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<!--  browse   -->

<head>
    <title>General Information</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://dravp.cpu-bioinfor.org/lazysheep/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://dravp.cpu-bioinfor.org/lazysheep/css/private.css">
    <link rel="stylesheet" type="text/css" href="http://dravp.cpu-bioinfor.org/lazysheep/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="http://dravp.cpu-bioinfor.org/lazysheep/css/public.css">
    <link rel="stylesheet" type="text/css" href="http://dravp.cpu-bioinfor.org/lazysheep/css/molstar.css" />
    <script language="Javascript" src="http://dravp.cpu-bioinfor.org/lazysheep/js/jquery-1.11.1.js"></script>
    <script language="JavaScript" src="http://dravp.cpu-bioinfor.org/lazysheep/js/bootstrap.js"></script>
    <script src="https://3Dmol.org/build/3Dmol-min.js" async></script>
    
    <style>
        p>span{
            font-weight:549;
            font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        strong{
            font-family: arial,verdana,helvetica,sans-serif;
        }
    </style>
</head>


<body>

<?php
require_once ("../head/head_content.php");
?>

<div class="container">
    <div class="row" style="padding-top:80px;">
        <ol class="breadcrumb">
            <li><a href="http://dravp.cpu-bioinfor.org">Home</a></li>
            <li><a href="http://dravp.cpu-bioinfor.org/browse/GeneralData.php">Browse</a></li>
            <li class="active"><?php  echo "{$row['DRAVP_ID']}"?></li>
	        <li style="float:right;"><a href="<?php echo $_SERVER['HTTP_REFERER'];  ?>"><span class="glyphicon glyphicon-arrow-left">Back</span></a></li>
        </ol>
    </div>



    <div class="row mt40">
        <div class="col-md-3 mt30">

            <div class="row">
                <div class="panel panel-info" style="position: fixed;">

                    <div class="panel-footer">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#General Information">General Information</a></li>
                            <li><a href="#Activity Information">Activity Information</a></li>
                            <li><a href="#Structure Information">Structure Information</a></li>
                            <li><a href="#Literature Information">Literature Information</a></li>

                        </ul>
                    </div>
                </div>
            </div>



        </div>
        
        <!-- the content -->
        <div class="col-md-offset-1  col-md-8 mt30" >

         <!--general information-->
         <p id="General Information" name="General Information">
                <strong style="font-size: 22px">General Information</strong>
            </p>
            <hr style="border-top: 1px solid #ddd;border-bottom: 1px dotted #fff;">
            <div style="padding: 12px;background-color: #f7f7f7;border: 1px solid #ddd;border-radius: 12px;">

                  <p>
                      <span style="color: #4478b1;font-size:18px;">DRAVP ID</span>&nbsp; <?php echo $row['DRAVP_ID']?>
                  </p>
                  <p>
                      <span style="color: #4478b1;font-size:18px;">Peptide Name</span>&nbsp;&nbsp; <?php echo $row['Name']?>
                  </p>
                  <p>
                      <span style="color: #4478b1;font-size:18px;">Sequence</span>&nbsp; <?php echo $row['Sequence']?>
                  </p>
                  <p>
                      <span style="color: #4478b1;font-size:18px;">Sequence Length</span> &nbsp;<?php echo $row['Sequence_Length']?>
                  </p>
                  <p>
                      <span style="color: #4478b1;font-size:18px;">Original Sequence</span> &nbsp;<?php echo $row['Original_Sequence']?>
                  </p>
                  <p>
                      <span style="color: #4478b1;font-size:18px;">Source</span>&nbsp; <?php echo $row['Source']?>
                  </p>
                  <p>
                      <span style="color: #4478b1;font-size:18px;">Validation</span>&nbsp;&nbsp; <?php echo $row['Validation']?>
                  </p>

          </div>

          <br><br>
            <p id="Activity Information" name="Activity Information">
                <strong style="font-size: 22px">Activity Information</strong>
            </p>
            <hr style="border-top: 1px solid #ddd;border-bottom: 1px dotted #fff;">
            <div style="padding: 12px;background-color: #f7f7f7;border: 1px solid #ddd;border-radius: 12px;">

                  <p>
                      <span style="color: #4478b1;font-size:18px;">Target Organism</span>&nbsp; <?php echo $row['Target_Organism']?>
                  </p>
                  <p>
                      <span style="color: #4478b1;font-size:18px;">Assay</span>&nbsp; <?php echo $row['Assay']?>
                  </p>
                  <p>
                      <span style="color: #4478b1;font-size:18px;">Activity</span>&nbsp; 
                    
                     <?php 
                    
                        if (strpos($row['Activity'],':')!==false) {
							$target_organism=$row['Activity'];

					    	$target_organism_array=explode("##", $target_organism);

					    	echo "<ul class='list-unstyled'>";

					    	for ($i=0; $i < count($target_organism_array) ; $i++ ) { 

			 		    		$temp=preg_replace("/\:/", ":</b>", $target_organism_array[$i]);
			 		    							
			 		    		echo "<li><b>$temp</b></li>";
			 		    			//echo "<b>$temp</b>";
					    	}

					    	echo "</ul>";  
					    } else {
							
							echo "{$row['Activity']}";
						}
						
                    ?>
                  </p>
                  <p>
                      <span style="color: #4478b1;font-size:18px;">Hemolytic Activity</span>&nbsp; 
                    
                     <?php 
                    
                        if ($row['Hemolytic_Activity'] == "No hemolysis information or data found in the reference(s) presented in this entry") {

				    		echo $row['Hemolytic_Activity'];
				    							
				    	}else{

				    		$hemolytic_activity=$row['Hemolytic_Activity'];

					    	$hemolytic_activity_array=explode("##", $hemolytic_activity);

					    	echo "<ul class='list-unstyled'>";

					    	for ($i=0; $i < count($hemolytic_activity_array) ; $i++ ) { 

			 		    		$temp1=preg_replace("/\:/", ":</b>", $hemolytic_activity_array[$i]);
			 		    							
			 		    		echo "<li>$temp1</li>";
					    						
					    	}

					    	echo "</ul>";  
					    					
				    	}

                     ?>
                  </p>
                  <p>
                      <span style="color: #4478b1;font-size:18px;">Cytotoxicity</span>&nbsp; 
                    
                     <?php
											
				    	if ($row['Cytotoxicity_Activity'] == "No cytotoxicity information found in the reference(s) presented") {

				    		echo $row['Cytotoxicity_Activity'];
				    							
				    	}else{

				    		$cytotoxicity_activity=$row['Cytotoxicity_Activity'];

					    	$cytotoxicity_activity_array=explode("##", $cytotoxicity_activity);

					    	echo "<ul class='list-unstyled'>";

					    	for ($i=0; $i < count($cytotoxicity_activity_array) ; $i++ ) { 

			 		    		$temp2=preg_replace("/\:/", ":</b>", $cytotoxicity_activity_array[$i]);
			 		    							
			 		    		echo "<li><b>$temp2</b></li>";
	  				    	
					    	}

					    	echo "</ul>";  
					    
				    	}
                     ?>
                  </p>
                  <p>
                      <span style="color: #4478b1;font-size:18px;">Binding Target</span>&nbsp; <?php echo $row['Binding_Target']?>
                  </p>
                  <p>
                      <span style="color: #4478b1;font-size:18px;">Mechanism</span>&nbsp; <?php echo $row['Mechanism']?>
                  </p>

            </div>


            <br><br>
            <p id="Structure Information" name="Structure Information">
                <strong style="font-size: 22px">Structure Information</strong>
            </p>
            <hr style="border-top: 1px solid #ddd;border-bottom: 1px dotted #fff;">
            <div style="padding: 12px;background-color: #f7f7f7;border: 1px solid #ddd;border-radius: 12px;">
              
                <p>
                    <span style="color: #4478b1;font-size:18px;">Linear/Cyclic</span>&nbsp; <?php echo $row['Linear_Cyclic']?>
                </p>

                <p>
                    <span style="color: #4478b1;font-size:18px;">N-terminal Modification</span>&nbsp; <span style="font-size:15px;color:black"><?php echo $row['N-terminal_Modification']?></span>
                </p>
                <p>
                    <span style="color: #4478b1;font-size:18px;">C-terminal Modification</span>&nbsp; <?php echo $row['C-terminal_Modification']?>
                </p>
                <p>
                    <span style="color: #4478b1;font-size:18px;">Special Amino Acid and Stapling Position</span>&nbsp; <?php echo $row['special_amino_acid and stapling_position']?>
                </p>
                <p>
                    <span style="color: #4478b1;font-size:18px;">Structure Description</span>&nbsp; <?php echo $row['structure_description']?>
                </p>
                <p>
                    <span style="color: #4478b1;font-size:18px;">Stereochemistry</span>&nbsp; <?php echo $row['stereochemistry']?>
                </p>

            </div>

            <br><br>
            <p id="Literature Information" name="Literature Information">
                <strong style="font-size: 22px">Literature Information</strong>
            </p>
            <hr style="border-top: 1px solid #ddd;border-bottom: 1px dotted #fff;">
            <div style="padding: 12px;background-color: #f7f7f7;border: 1px solid #ddd;border-radius: 12px;">
                
                
            <?php
                $title = explode("##", $row['Title']);						
							$pubmed_id = explode("##", $row['Pubmed_ID']);
							$author = explode("##", $row['Author']);
							$reference = explode("##", $row['Reference']);
							$doi = explode("##",$row['Doi']);

	
							for ($i= 0;$i< count($pubmed_id); $i++){
								$num=$i+1;
echo<<<LL_IN
                    <p>
                        <span style="color: #333;;font-size:18px;">Literature {$num}</span>
                    </p>
                    <p>
                        <span style="color: #4478b1;font-size:18px;">Title</span>&nbsp;&nbsp; {$title[$i]}
                    </p>
                    <p>
                        <span style="color: #4478b1;font-size:18px;">Pubmed ID &nbsp;
                        <a target='_blank'  href="http://www.ncbi.nlm.nih.gov/pubmed/{$pubmed_id[$i]}" style="font-size:15px;">{$pubmed_id[$i]}</a>
                        </span>
                    </p>
                    <p>
                        <span style="color: #4478b1;font-size:18px;">Reference</span>&nbsp;&nbsp; {$reference[$i]}
                    </p>
                    <p>
                        <span style="color: #4478b1;font-size:18px;">Author</span>&nbsp;&nbsp; {$author[$i]}
                    </p>
                    <p>
                        <span style="color: #4478b1;font-size:18px;">DOI &nbsp;
                            <a target="_blank"  href="https://doi.org/{$doi[$i]}" style="font-size:15px;">{$doi[$i]}</a>
                        </span>
                    </p>

LL_IN;
						

							}
                ?>
            </div>
            <br><br>

        </div>
    </div>
</div>






<?php

require_once("../head/footer.php");

?>



</body>
<script type="text/javascript">

    function showDivs(objId) {

        <?php
        $piewww = explode("##", $row['Structure']);
        $nuww = count($piewww);
        $ibwww=0;
        while($ibwww<$nuww){
            $linkbwww=$piewww[$ibwww];


           echo 'document.getElementById("'.$ibwww.'").style.display = "none";';
            echo 'document.getElementById("a'.$ibwww.'").style.background = "#e6e6e6";';
            echo 'document.getElementById("a'.$ibwww.'").style.color = "#000000";';
            echo 'document.getElementById("a'.$ibwww.'").style.borderColor = "#ccc";';

            $ibwww++;
        }
        ?>
        document.getElementById(objId).style.display = "";
        document.getElementById('a'+objId).style.background = "#31b0d5";
        document.getElementById('a'+objId).style.color = "#ffffff";
        document.getElementById('a'+objId).style.borderColor = "#31b0d5";
    }

</script>

<script type="text/javascript" src="http://dravp.cpu-bioinfor.org/lazysheep/js/molstar.js"></script>
        <script type="text/javascript">
            molstar.Viewer.create('app', {
                layoutIsExpanded: true,
                layoutShowControls: false,
                layoutShowRemoteState: false,
                layoutShowSequence: true,
                layoutShowLog: false,
                layoutShowLeftPanel: true,

                viewportShowExpand: true,
                viewportShowSelectionMode: false,
                viewportShowAnimation: false,

                pdbProvider: 'http://dravp.cpu-bioinfor.org/',
                emdbProvider: 'rcsb',
            }).then(viewer => {
                viewer.loadPdb('7bv2');
                viewer.loadEmdb('EMD-30210', { detail: 6 });
                // viewer.loadAllModelsOrAssemblyFromUrl('https://cs.litemol.org/5ire/full', 'mmcif', false, { representationParams: { theme: { globalName: 'operator-name' } } })
                // viewer.loadStructureFromUrl('my url', 'pdb', false, {
                //     representationParams: {
                //         theme: {
                //             globalName: 'uniform',
                //             globalColorParams: { value: 0xff0000 }
                //         }
                //     },
                //     label: 'my structure'
                // });
            });
        </script>


</body>

