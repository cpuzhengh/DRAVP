<!DOCTYPE html>
<html lang="en">
<head>
        <title>Welcome To Dramp Database</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="http://dravp.cpu-bioinfor.org/lazysheep/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://dravp.cpu-bioinfor.org/lazysheep/css/private.css">
    <link rel="stylesheet" type="text/css" href="http://dravp.cpu-bioinfor.org/lazysheep/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="http://dravp.cpu-bioinfor.org/lazysheep/css/public.css">
    <script language="Javascript" src="http://dravp.cpu-bioinfor.org/lazysheep/js/jquery-1.11.1.js"></script>
    <script language="JavaScript" src="http://dravp.cpu-bioinfor.org/lazysheep/js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/jquery-1.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>       
    <style>
        th,td{
            text-align:center;
            padding:7px 20px;
        }
    </style>
</head>


<body>

<?php

          require_once ("../head/head_content.php");

?>

<!-- 只替换 body 内原有内容即可 -->
<div class="container">
    <div class="row" style="margin-top:80px;">
        <ol class="breadcrumb">
            <li><a href="http://dravp.cpu-bioinfor.org">Home</a></li>
            <li class="active">Help</li>
        </ol>
    </div>

    <div class="row" style="margin-top:-10px;">
        <h1 style="text-align:center;">Help</h1>

        <!-- ===== 左侧目录 ===== -->
        <div id="main">
            <div class="contents">
                <p> The Data Repository of Antiviral peptides and proteins (DRAVP) was created for the purpose of helping users browse and retrieve AVPs in a more convenient way. The database is manually curated and contains information of AVPs from journals, patents and clinical trials platforms.</p>

                <h3>Contents</h3>

                <h5>Dataset</h5>
                <ul>
                    <li><a href="#general">Antiviral peptide</a></li>
                    <li><a href="#protein">Antiviral protein</a></li>
                    <li><a href="#patent">Patent Data</a></li>
                    <li><a href="#clinical">Clinical Data</a></li>
                    <li><a href="#stapled">Specific Data</a></li>
                </ul>

                <h5>Search help</h5>
                <ul>
                    <li><a href="#simple">Simple Search</a></li>
                    <li><a href="#adv">Advanced Search</a></li>
                </ul>

                <h5><a href="#blast">Blast</a></h5>
            </div>
        </div>

        <!-- ===== 右侧详细内容 ===== -->
        <div class="box_item">

            <!-- 1. Antiviral peptide -->
            <h3 id="general">Antiviral peptide</h3>
            <p>General dataset is the most important part of DRAVP because each entry has detailed annotations and serious descriptions.</p>
            <table border="1" align="center">
                <thead>
                <tr>
                    <th>-</th>
                    <th>Fields</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="6">General information</td>
                        <td>DRAVP ID</td>
                        <td>The field provides the unique accessing number linking to the corresponding DRAVP entry</td>
                    </tr>
                    <tr>
                        <td>Peptide Name</td>
                        <td>Name of each peptide or protein in DRAVP.</td>
                    </tr>
                    <tr>
                        <td>Sequence</td>
                        <td>The peptide sequence which is represented by single letter codes.</td>
                    </tr>
                    <tr>
                        <td>Sequence Length</td>
                        <td>Number of resiudes in the peptide sequence</td>
                    </tr>
                    <tr>
                        <td>Uniprot ID</td>
                        <td>Provide the accessing link(s) directing to external Uniprot entry(or entries). </td>
                    </tr>
                    <tr>
                        <td>Source</td>
                        <td>The organism where the peptides or proteins were extracted or isolated.</td>
                    </tr>
                    <tr>
                        <td rowspan="7">Activity information</td>
                        <td>Target Organism</td>
                        <td>Specific virus types</td>
                    </tr>
                    <tr>
                        <td>Assay</td>
                        <td>Methods for determination of antiviral activity in literature</td>
                    </tr>
                    <tr>
                        <td>Activity</td>
                        <td>Antiviral activity information against viruses</td>
                    </tr>
                    <tr>
                        <td>Hemolytic Activity</td>
                        <td>Hemolytic activity information against red blood cells (RBCs)</td>
                    </tr>
                    <tr>
                        <td>Cytotoxicity</td>
                        <td>cytotoxicity information against host cells except RBCs</td>
                    </tr>
                    <tr>
                        <td>Binding Target</td>
                        <td>The action site of peptides against viruses</td>
                    </tr>
                    <tr>
                        <td>Mechanism</td>
                        <td>The mechanism of peptides exhibit antiviral activity</td>
                    </tr>
                    <tr>
                        <td rowspan="7">Structure information</td>
                        <td>PDB ID</td>
                        <td>Provide accessing link(s) directing to the correspong PDB entry.</td>
                    </tr>
                    <tr>
                        <td>Predicted Structure ID</td>
                        <td>Structure predicted by Alphafold,click can download the PDB files</td>
                    </tr>
                    <tr>
                        <td>Structure</td>
                        <td>Show the structure with Mol*viewer</td>
                    </tr>
                    <tr>
                        <td>Linear/Cyclic</td>
                        <td>Linear or cyclic of peptides</td>
                    </tr>
                    <tr>
                        <td>N/C-terminal Modification</td>
                        <td>The modifications of N/C-terminal according to the references</td>
                    </tr>
                    <tr>
                        <td>Other Modification</td>
                        <td>All bonds and special amino acids (out of 20 common amino acids)</td>
                    </tr>
                    <tr>
                        <td>Stereochemistry</td>
                        <td>The L/D amino acids consist peptides</td>
                    </tr>
                    <tr>
                        <td>Physicochemical Information</td>
                        <td colspan="2">Formula, mass, pI, Net charge and other information.</td>
                    </tr>
                    <tr>
                        <td>Literature Information</td>
                        <td colspan="2">The information of peptides come from all kinds of literature and the section provides the way to find the full text.</td>
                    </tr>
                </tbody>
            </table>
            <br/>

            <!-- 2. Antiviral protein -->
            <h3 id="protein">Antiviral protein</h3>
            <p>Proteins with antiviral activity have been collected in the dataset. The annotation information of protein data is similar to that of general data, but there is no physicochemical information. The standard of collection of proteins are as follow:<br/>
            1. Sequence length ≥ 100.<br/>
            2. Direct or indirect antiviral effects are specifically reported in the literature.</p>
            <br/>

            <!-- 4. Patent Data -->
            <h3 id="patent">Patent Data</h3>
            <p>Patent dataset is based on a large amount of patent sequences, which account for a large proportion in DRAVP. Such patent AVPs information can show existing patented AVP sequences and help researchers avoid infringement risk. The page of patent AVPs present patent accession number and family information. Users can browse detailed patent information in <a href="https://lens.org" target="_blank">Lens.org</a>.</p>
            <br/>

            <!-- 5. Clinical Data -->
            <h3 id="clinical">Clinical Data</h3>
            <p>Clinical dataset is an important part of our database, although the clinical data are fewer comparing to other datasets. We have collected the clinical trials information in DRAVP, which contains NCT Number, Condition/Disease, phase and Study Title.</p>
            <br/>

            <!-- 3. Stapled AVPs（新增） -->
            <h3 id="stapled">Specific Data</h3>
            <p>Specific dataset contains stapled AVPs.Stapled AVPs are a special subset of antiviral peptides that contain hydrocarbon staples or other chemical bridges to stabilize α-helical conformations. These modifications often enhance proteolytic stability, cell permeability and antiviral potency. Each entry includes stapling positions, cross-linker chemistry and structural annotations.</p>
            <br/>

            <!-- 6. Simple search -->
            <h3 id="simple">Simple search</h3>
            <p>The simple search page allows users to search individual fields found within AVP.<br/>
            1. Find a list of all indexed fields in the drop-down menu and choose one of your interest.<br/>
            2. Enter the appropriate contents in the text area below.<br/>
            3. Click "Submit" (or click "Reset" to clear your input).</p>
            <p style="text-align:center;"><img src="../link_img/simple_search.png"></p>
            <br/>
            <div class="box_table bs-example">
               <div>
                    <ul>
		            <li>Sequence >>> <span>Single letter code (no space, mature peptide only) .e.g.<strong>INLKAIAALAKKLL</strong></span></li>
                    <li>Peptide Name >>> <span>Name of peptides in DRAVP (full name or short name works) .e.g.<strong>Mastoparan M</strong></span></li> 
                    <li>Sequence length >>> <span>Enter the peptide sequence length number. e.g.<strong>21</strong></span></li>
                    <li>Target Organism >>> <span>The virus type which AVP inhibits e.g.<strong>HIV.</strong></span></li>
                    <li>Linear/Cyclic >>> <span>Structural properties of peptides, linear or cyclic. e.g.<strong>linear</strong></span></li>
                    <li>UniProt ID >>> <span>Accessing number and linking to UniProtKB/Swiss-Prot entries. e.g.<strong>P04205</strong></span></li>
                    <li>PDB ID >>> <span>Accessing numble of Protein Data Bank. e.g.<strong>2KHT</strong></span></li>
		            </ul>                        
                </div>
            </div>
            <br/>

            <!-- 7. Advanced search -->
            <h3 id="adv">Advanced search</h3>
            <p>Enter the appropriate contents in the text area. The relationship between each item is "and".</p>
            <p style="text-align:center;"><img src="../link_img/adv_search.png"></p>

            <!-- 8. Blast -->
            <h3 id="blast">Blast</h3>
            <p>The BLAST (Basic Local Alignment Search Tool) program uses a strategy based on matching sequence fragments by employing a powerful statistical model to find the best local alignments (For more information see <a href="http://www.ebi.ac.uk/Tools/sss/ncbiblast/" target="_blank">http://www.ebi.ac.uk/Tools/sss/ncbiblast/</a>).</p>
            <h4>Usage Introduction</h4>
            <p>1. Sequence Input: The query sequence can be entered directly into text area. The sequence must be FASTA format.<br/>
            2. Parameter choose: choose the scoring matrix to be applied to the search, the default value is <strong>BLOSUM62</strong>.</p>
            <p style="text-align:center;"><img src="../link_img/blast.png"></p>

        </div> <!-- /.box_item -->
    </div> <!-- /.row -->
</div> <!-- /.container -->


<?php

	require_once("../head/footer.php");

?>

</body>
</html>
