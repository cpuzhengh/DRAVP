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
    <script src="https://3Dmol.org/build/3Dmol-min.js" async></script>
</head>
<style>
    .list-inline{
        padding:0 60px;
    }
</style>
<body>

<?php 

    require_once('./head/head.php');

?>

<div class="clearfix"></div>

    <div style="background:#ccddee59;margin-top:54px;">
    <div class="container">
            <div class="row ">
            <!-- background-->
                <div clss="col-md-12">
                    <div style="width:900px;margin:0 auto;">
                        <h1 style="color:#328bca;text-align:center;text-indent:-20px;">Data Repository of <font style="color:#034a73">Antiviral Peptides</font> and <font style="color:#034a73">Proteins</font></h1>
                    </div>
                </div>
            <!-- 快速检索框 -->
                <div clss="col-md-12">
                    <div style="width:600px;margin:0 auto;">
                        <form method="get" action="./search/quick_search.php" class="form-inline">
                           
                            
                              <div class="col-md-8 form-group" style="padding:0 15px 20px 15px;">
                                  
                                      <input type="text" class="form-control input-lg" id="exampleInputEmail1" name="txtarea" placeholder="Sequence/Name/Target Organism">
                                  
                            </div>
                            <button type="submit" class="btn btn-default btn-lg">Quick Search</button> 
                        </form>
                    </div>
                </div>

                <!--<div class="col-md-12" style="margin-top:20px;">-->
                <!--    <div style="width:700px;margin:0 auto;">-->
                <!--        <ul class="list-inline">-->
                <!--            <li><b>Classification:</b></li>-->
                <!--            <li><a href="http://dramp.cpu-bioinfor.org/browse/Bacteriocins.php"><font color=#034a73>Data type</font></a></li>-->
                <!--            <li><a href="http://dramp.cpu-bioinfor.org/browse/ClinicalTrialsData.php"><font color=#034a73>Virus type</font></a></li>-->
                <!--            <li><a href="http://dramp.cpu-bioinfor.org/browse/GeneralData.php"><font color=#034a73>Virus family</font></a></li>-->
                <!--        </ul>            -->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>

</div>


<div class="clearfix"></div>

            
<div class="container" style="margin-top:10px;">
    <div class="container">
    <!--网站主页信息-->
    <div class="row" style="width:1190px;">
        <div class="col-md-3">
            <div class="panel panel-info" style="width:302px;margin:30px 0 0 -30px;">
                <!--<div class="panel-heading">-->
                <!--    <h3 class="panel-title">New Released Structures</h3>-->
                <!--</div>-->
                <div>
                <?php 
                    require_once('./viewer.html');
                ?>
                </div>
            </div>
        <!--链接-->
            <div class="panel panel-info" style="width:302px;margin:30px 0 0 -30px;">
                <div class="panel-heading">
                    <h3 class="panel-title" style="color:#034a73;">External Links</h3>
                </div>
                <div class="panel-body" style="padding:20px 20px 20px 50px;">
                    <ul class="list-unstyled">
                        <li><a href="http://www.ncbi.nlm.nih.gov/"><img src="./link_img/ncbi.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://dramp.cpu-bioinfor.org/"><img src="./link_img/dramp.png" /></a></li>
                        <br />
                        <li><a href="http://www.uniprot.org/"><img src="./link_img/uniprot.gif" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.ncbi.nlm.nih.gov/pubmed"><img src="./link_img/pubmed.png" /></a></li>
                        <br />
                        <li><a href="http://www.rcsb.org/pdb/home/home.do"><img src="./link_img/pdb.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.lens.org/"><img src="./link_img/lens.png" /></a></li>
                        <br />
                        <li><a href="https://dbaasp.org/home"><img src="./link_img/DBAASP.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://clinicaltrials.gov/"><img src="./link_img/go_clinical.png" /></a></li>
                        <br />
                        <li><a href="http://crdd.osdd.net/servers/avpdb"><img src="./link_img/avpdb.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://i.uestc.edu.cn/ACovPepDB/"><img src="./link_img/ACovPepDB.png" /></a></li>
                        <br />
                        <li><a href="http://150.158.148.228:5000"><img src="./link_img/acp-dnnel.png" /></a></li>
                    </ul>                      
                </div>
            </div>
        </div>
        <div class="col-md-offset-1 col-md-8">
        <!--mol* viewer-->
            
        
            <div >
                <h3>Welcome to DRAVP Database</h3>
                <p>DRAVP(Data repository of antiviral peptides) is an open-access and manually curated database harboring diverse annotations of AVPs including sequences, activities, physicochemical, patent, clinical and reference information.It currently holds a total of <b>5688</b> entries, comprising <b>2765</b> entries of antiviral peptides, <b>176</b> entries of antiviral proteins, <b>78</b> entries of clinical data,and more.</p>
                
                <p>Data in the DRAVP is made available under an CC0 License. You are entitled to access and use the services and download data. The free services are offered for the purpose of providing access to summarized data, analytics, metadata, and bulk downloads.</p>
                            
                <p>To all regular downloads, please cite our publications. If you find some errors in the website, please send an email to 3121784850@qq.com.</p>
            </div>
            <br/>
            <p>*Citation*:</p>
            <p>Liu Y, Zhu Y, Sun X, Ma T, Lao X, Zheng H. DRAVP: A Comprehensive Database of Antiviral Peptides and Proteins. Viruses. 2023; 15(4):820. https://doi.org/10.3390/v15040820</p>
            
        <!--网站更新日志-->
          <div class="panel panel-info" style="margin-top:48px;">
                <div class="panel-heading">
                    <h3 class="panel-title">NEWS & EVENTS</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled" style="font-size:15px;margin-bottom:0;">

                        <li>➢<b>Sep 3 2025</b>  Download page has been updated, users can download data categorized by different activities.</li><br/>
                        <li>➢<b>Sep 2 2025</b>  200 entries are added to antiviral peptides dataset in DRAVP.</li><br/>
                        <li>➢<b>Aug 25 2025</b>  A new field, Stapled AVPs (n=43), is now available in the Specific Data section.</li><br/>
                        <li>➢<b>Aug 10 2025</b>  236 entries are added to antiviral peptides dataset in DRAVP.</li><br/>
                        <li>➢<b>July 11 2025</b>  109 patent peptides have been updated in DRAVP.</li><br/>
                        <li>➢<b>Jun 11 2025</b>  37 new entries of proteins are added to DRAVP.</li><br/>
                        <li>➢<b>May 31 2025</b>  137 entries are added to antiviral peptides dataset in DRAVP.</li><br/>
                        <li>➢<b>Apr 24 2025</b>  51 patent peptides have been updated in DRAVP.</li><br/>
                        <li>➢<b>Apr 9 2025</b>  67 entries are added to antiviral peptides dataset in DRAVP.</li><br/>
                        <li>➢<b>March 29 2025</b>  The "Origin Information" section has been added to the antiviral peptide details page.</li><br/>
                        </li><a href="./static/update.php" style="color:black;font-size:18px;">...</a>
                        
                    </ul>
                </div>
            </div>

        
            
        
        <!--团队介绍-->
            <div class="panel panel-info" style="margin-top:30px;">
                <div class="panel-heading">
                    <h3 class="panel-title">About Us</h3>
                </div>
                <div class="panel-body">
                    <p><b>Contact: Heng Zheng Ph.D.</b></p>
                    <p>E-mail: <span class="glyphicon glyphicon-envelope"> </span><a href="mailto:zhengh18@hotmail.com">&nbsp;zhengh18@hotmail.com</a></p>
                    <!--<p>Adress: School of Life Science and Technology, China Pharmaceutical University, Nanjing 210009, China.</p>-->
                    <p>
                        The database is developed by Dr.Zheng's team. This is the home page of the database, please use the navigation bar in the top of page to browse the database. If you encounter any problems in using this database, please send an email to 2057850020@qq.com, we will help you solve as soon as possible.
                    </p>                    
                </div>
            </div>
        
        
        </div>
        </div>
    </div>
</div>

<?php

    require_once("./head/footer.php");

?>


</body>
</html>