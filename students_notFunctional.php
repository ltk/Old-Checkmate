<?php
$page = "students.php";
require_once('start.php');
?>

        



                    <div class="main-content">
						<script type="text/javascript"> 
						$(document).ready(function(){
						    $('#slider').slidernav();

						    $('.isotope-contacts').isotope({
						        layoutMode: 'cellsByRow',
						        cellsByRow : {
						            columnWidth : 286
						        },
						        getSortData : {
						            fullname : function ( $elem ) {
						                return $elem.find('.fullname').text();
						            },
						            name : function ( $elem ) {
						                return $elem.find('.name').text();
						            },
						            bday : function ( $elem ) {
						                return $elem.find('.bday').text();
						            }
						        },
						        filter: $('input[name=index]:checked').val()
						    });

						    $('#isotope-contacts-filter input[name="index"]').change(function(){
						        var base = this;
						        setTimeout(function(){$('.isotope-contacts').isotope({ filter: $(base).val() });},500);
						    });
						    $('#isotope-contacts-filter input[name="sort"]').change(function(){
						        var base = this;
						        setTimeout(function(){$('.isotope-contacts').isotope({ sortBy: $(base).val() });},500);
						    });

						});
						</script>
                        <header>
                            <ul class="action-buttons clearfix">
                                <li><a href="../account" class="button" data-icon-primary="ui-icon-wrench" data-icon-only="true">Options</a></li>
                                <li><a href="../documentation/index.html" class="button help" rel="#overlay" data-icon-primary="ui-icon-help" data-icon-only="true">Help</a></li>
                            </ul>
                            <h2>
                                Students
                            </h2>
                        </header>
                        <section class="container_6 clearfix">                           
                            <div class="grid_6">
                                <div class="portlet">
                                    <header>
                                        <h2>Find a Student</h2>
                                    </header>
                                    <form id="isotope-contacts-filter" class="ui-widget-header ui-state-default clearfix">
                                        <span class="buttonset" id="isotope-contacts-index">
                                            <input type="radio" name="index" id="index-a" value=".index-a" checked="checked"><label for="index-a">A</label>
                                            <input type="radio" name="index" id="index-b" value=".index-b"><label for="index-b">B</label>
                                            <input type="radio" name="index" id="index-c" value=".index-c"><label for="index-c">C</label>
                                            <input type="radio" name="index" id="index-d" value=".index-d"><label for="index-d">D</label>
                                            <input type="radio" name="index" id="index-e" value=".index-e"><label for="index-e">E</label>
                                            <input type="radio" name="index" id="index-f" value=".index-f"><label for="index-f">F</label>
                                            <input type="radio" name="index" id="index-g" value=".index-g"><label for="index-g">G</label>
                                            <input type="radio" name="index" id="index-h" value=".index-h"><label for="index-h">H</label>
                                            <input type="radio" name="index" id="index-i" value=".index-i"><label for="index-i">I</label>
                                            <input type="radio" name="index" id="index-j" value=".index-j"><label for="index-j">J</label>
                                            <input type="radio" name="index" id="index-k" value=".index-k"><label for="index-k">K</label>
                                            <input type="radio" name="index" id="index-l" value=".index-l"><label for="index-l">L</label>
                                            <input type="radio" name="index" id="index-m" value=".index-m"><label for="index-m">M</label>
                                            <input type="radio" name="index" id="index-n" value=".index-n"><label for="index-n">N</label>
                                            <input type="radio" name="index" id="index-o" value=".index-o"><label for="index-o">O</label>
                                            <input type="radio" name="index" id="index-p" value=".index-p"><label for="index-p">P</label>
                                            <input type="radio" name="index" id="index-q" value=".index-q"><label for="index-q">Q</label>
                                            <input type="radio" name="index" id="index-r" value=".index-r"><label for="index-r">R</label>
                                            <input type="radio" name="index" id="index-s" value=".index-s"><label for="index-s">S</label>
                                            <input type="radio" name="index" id="index-t" value=".index-t"><label for="index-t">T</label>
                                            <input type="radio" name="index" id="index-u" value=".index-u"><label for="index-u">U</label>
                                            <input type="radio" name="index" id="index-v" value=".index-v"><label for="index-v">V</label>
                                            <input type="radio" name="index" id="index-w" value=".index-w"><label for="index-w">W</label>
                                            <input type="radio" name="index" id="index-x" value=".index-x"><label for="index-x">X</label>
                                            <input type="radio" name="index" id="index-y" value=".index-y"><label for="index-y">Y</label>
                                            <input type="radio" name="index" id="index-z" value=".index-z"><label for="index-z">Z</label>
                                            <input type="radio" name="index" id="index-all" value="*"><label for="index-all">All</label>
                                        </span>
                                        <hr />
                                        <span class="buttonset" id="isotope-contacts-sort">
                                            <input type="radio" name="sort" id="sort-firstname" value="fullname" checked="checked"><label for="sort-firstname">First Name</label>      
                                            <input type="radio" name="sort" id="sort-lastname" value="name"><label for="sort-lastname">Last Name</label>      
                                            <input type="radio" name="sort" id="sort-bday" value="bday"><label for="sort-bday">Birthday</label>
                                        </span>
                                    </form>
                                    <section>
                                        <ul class="isotope-contacts clearfix">
                                                                                    <li class="button-blue ui-corner-all index-p" data-id="66f6d7ff16d37e3bde9643358c98cfe1">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Charlotte Pullen</div>
                                                <div class="name">Pullen, Charlotte</div>
                                                <div class="city">City: Antioch</div>
                                                <div class="email">Email: CharlotteBPullen@example.com</div>
                                                <div class="bday">Birthday: 1940-9-5</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-k" data-id="bcd25054edf383c3f5154bf98084f8a6">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Velma Keeton</div>
                                                <div class="name">Keeton, Velma</div>
                                                <div class="city">City: Lexington</div>
                                                <div class="email">Email: VelmaJKeeton@example.com</div>
                                                <div class="bday">Birthday: 1991-2-26</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-b" data-id="b3869c81ff2c12d0be71b0bcecf70fc4">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Debra Bryant</div>
                                                <div class="name">Bryant, Debra</div>
                                                <div class="city">City: Cambridge</div>
                                                <div class="email">Email: DebraGBryant@example.com</div>
                                                <div class="bday">Birthday: 1949-6-1</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-p" data-id="fac966a9a5a4b273ac162dbe130bc9ab">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Catrina Pickett</div>
                                                <div class="name">Pickett, Catrina</div>
                                                <div class="city">City: Brookfield</div>
                                                <div class="email">Email: CatrinaSPickett@example.com</div>
                                                <div class="bday">Birthday: 1964-6-22</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-a" data-id="4975cfc1717e0f7f1f8387bc3d78b78e">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Harvey Anderson</div>
                                                <div class="name">Anderson, Harvey</div>
                                                <div class="city">City: ÅLESUND</div>
                                                <div class="email">Email: HarveyAAnderson@example.com</div>
                                                <div class="bday">Birthday: 1930-7-31</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-a" data-id="0e0678531c72bfefd18ec2eba8cb3ff7">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Lindsay Ayala</div>
                                                <div class="name">Ayala, Lindsay</div>
                                                <div class="city">City: YTRE ARNA</div>
                                                <div class="email">Email: LindsayRAyala@example.com</div>
                                                <div class="bday">Birthday: 1986-9-25</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-d" data-id="b93a2f82c742f15c9454105b19b13de4">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Roberto Dombrowski</div>
                                                <div class="name">Dombrowski, Roberto</div>
                                                <div class="city">City: Albany</div>
                                                <div class="email">Email: RobertoLDombrowski@example.com</div>
                                                <div class="bday">Birthday: 1945-9-5</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-z" data-id="f1770159bcdffc8dd343c8fa47785468">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Jonas Ziegler</div>
                                                <div class="name">Ziegler, Jonas</div>
                                                <div class="city">City: Saint Paul</div>
                                                <div class="email">Email: JonasZiegler@example.com</div>
                                                <div class="bday">Birthday: 1946-6-20</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="944afbc14dbaf07c52809ed56725fe7f">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Denise Mahn</div>
                                                <div class="name">Mahn, Denise</div>
                                                <div class="city">City: Crafton</div>
                                                <div class="email">Email: DeniseJMahn@example.com</div>
                                                <div class="bday">Birthday: 1969-4-6</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-b" data-id="74d1a31d3458964b0da01718fa195e3d">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Richard Broadbent</div>
                                                <div class="name">Broadbent, Richard</div>
                                                <div class="city">City: Towson</div>
                                                <div class="email">Email: RichardMBroadbent@example.com</div>
                                                <div class="bday">Birthday: 1971-12-20</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-r" data-id="cbbc73874d004e4b11ce4f5667ce3bb9">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Julia Rose</div>
                                                <div class="name">Rose, Julia</div>
                                                <div class="city">City: Eugene</div>
                                                <div class="email">Email: JuliaRRose@example.com</div>
                                                <div class="bday">Birthday: 1958-6-15</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-j" data-id="78201d875d70899f17e2d660bb96aa45">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Marilyn Jones</div>
                                                <div class="name">Jones, Marilyn</div>
                                                <div class="city">City: Framingham</div>
                                                <div class="email">Email: MarilynMJones@example.com</div>
                                                <div class="bday">Birthday: 1949-9-24</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-c" data-id="dccc08b9ebefec2f45e0d08dd13e0ab5">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Rosa Camire</div>
                                                <div class="name">Camire, Rosa</div>
                                                <div class="city">City: Los Angeles</div>
                                                <div class="email">Email: RosaRCamire@example.com</div>
                                                <div class="bday">Birthday: 1972-8-30</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-l" data-id="050db4311ae764882540fda3649733ab">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Kevin Laing</div>
                                                <div class="name">Laing, Kevin</div>
                                                <div class="city">City: Lake Butler</div>
                                                <div class="email">Email: KevinJLaing@example.com</div>
                                                <div class="bday">Birthday: 1980-2-24</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-s" data-id="9e9dd6db8675fe82bcd708f01e7548f2">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Daniel Spaulding</div>
                                                <div class="name">Spaulding, Daniel</div>
                                                <div class="city">City: Pittsburgh</div>
                                                <div class="email">Email: DanielRSpaulding@example.com</div>
                                                <div class="bday">Birthday: 1949-3-23</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-r" data-id="b4d81b169130f3df143202b9196c1643">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Melissa Rich</div>
                                                <div class="name">Rich, Melissa</div>
                                                <div class="city">City: Park City</div>
                                                <div class="email">Email: MelissaERich@example.com</div>
                                                <div class="bday">Birthday: 1989-8-27</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="6e8639047b6868a6cca17ca563008ed7">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Lorraine Watts</div>
                                                <div class="name">Watts, Lorraine</div>
                                                <div class="city">City: Clearwater</div>
                                                <div class="email">Email: LorraineJWatts@example.com</div>
                                                <div class="bday">Birthday: 1933-8-30</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-s" data-id="e1803a5fb0aa3c4156218b1749170d2d">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Katie Sleeper</div>
                                                <div class="name">Sleeper, Katie</div>
                                                <div class="city">City: North Gulf Beach</div>
                                                <div class="email">Email: KatieJSleeper@example.com</div>
                                                <div class="bday">Birthday: 1941-12-10</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="ffe55aef032f50367b4e67683dbddec5">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">John Marshall</div>
                                                <div class="name">Marshall, John</div>
                                                <div class="city">City: Salt Lake City</div>
                                                <div class="email">Email: JohnCMarshall@example.com</div>
                                                <div class="bday">Birthday: 1950-6-1</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="9a65e72ef0c49d38b20075dcf44e5681">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Melody Maus</div>
                                                <div class="name">Maus, Melody</div>
                                                <div class="city">City: Detroit</div>
                                                <div class="email">Email: MelodyWMaus@example.com</div>
                                                <div class="bday">Birthday: 1931-4-11</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="a36f7fe79436bed2bbabbad921d9b473">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Eileen Mitchell</div>
                                                <div class="name">Mitchell, Eileen</div>
                                                <div class="city">City: Lexington</div>
                                                <div class="email">Email: EileenFMitchell@example.com</div>
                                                <div class="bday">Birthday: 1962-7-9</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-e" data-id="a931f9ee717c7d6afe00a15fd124691f">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Steven Evans</div>
                                                <div class="name">Evans, Steven</div>
                                                <div class="city">City: Ashland</div>
                                                <div class="email">Email: StevenFEvans@example.com</div>
                                                <div class="bday">Birthday: 1951-7-15</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="1f17b05bba1736d06ea2055decda0bf0">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Robert Mcadoo</div>
                                                <div class="name">Mcadoo, Robert</div>
                                                <div class="city">City: Chicago</div>
                                                <div class="email">Email: RobertBMcadoo@example.com</div>
                                                <div class="bday">Birthday: 1989-3-13</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="f16f96882b7822c9a6b57fa8e75414f8">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Cynthia Morgan</div>
                                                <div class="name">Morgan, Cynthia</div>
                                                <div class="city">City: Sayreville</div>
                                                <div class="email">Email: CynthiaVMorgan@example.com</div>
                                                <div class="bday">Birthday: 1947-2-18</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-d" data-id="7702bbff127fdc8ba23eb75739493112">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Rose Davis</div>
                                                <div class="name">Davis, Rose</div>
                                                <div class="city">City: Tampa</div>
                                                <div class="email">Email: RoseLDavis@example.com</div>
                                                <div class="bday">Birthday: 1987-5-23</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="7d5e4db1319e227cf34dcff350ab7a15">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Thomas Woods</div>
                                                <div class="name">Woods, Thomas</div>
                                                <div class="city">City: San Diego</div>
                                                <div class="email">Email: ThomasBWoods@example.com</div>
                                                <div class="bday">Birthday: 1972-10-26</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="8a01d4754c664d077219fa2cc4257dcf">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Helen Williams</div>
                                                <div class="name">Williams, Helen</div>
                                                <div class="city">City: Portland</div>
                                                <div class="email">Email: HelenCWilliams@example.com</div>
                                                <div class="bday">Birthday: 1933-12-1</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-s" data-id="a29c80ed0ac6c605e2f58474fccd55f2">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Dawn Stanford</div>
                                                <div class="name">Stanford, Dawn</div>
                                                <div class="city">City: Vidor</div>
                                                <div class="email">Email: DawnMStanford@example.com</div>
                                                <div class="bday">Birthday: 1953-8-10</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="49ff4bf57b8bf40baed15bf2d2abc1c3">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Luis Watson</div>
                                                <div class="name">Watson, Luis</div>
                                                <div class="city">City: Los Angeles</div>
                                                <div class="email">Email: LuisKWatson@example.com</div>
                                                <div class="bday">Birthday: 1944-12-18</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="eae7fe85318def2e4335591490b9f461">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Milagros Webster</div>
                                                <div class="name">Webster, Milagros</div>
                                                <div class="city">City: Ogden</div>
                                                <div class="email">Email: MilagrosJWebster@example.com</div>
                                                <div class="bday">Birthday: 1987-2-9</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-c" data-id="2c934baca98ef1d994e936563320921c">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Laura Coleman</div>
                                                <div class="name">Coleman, Laura</div>
                                                <div class="city">City: Manchester</div>
                                                <div class="email">Email: LauraBColeman@example.com</div>
                                                <div class="bday">Birthday: 1963-10-8</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-t" data-id="ef2b00873d32ddcb2331605ddb042000">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Michelle Tate</div>
                                                <div class="name">Tate, Michelle</div>
                                                <div class="city">City: Wendover</div>
                                                <div class="email">Email: MichelleLTate@example.com</div>
                                                <div class="bday">Birthday: 1962-4-16</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-b" data-id="03ad1931ca46e2c6ae113287315fa817">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Thomas Brooks</div>
                                                <div class="name">Brooks, Thomas</div>
                                                <div class="city">City: Fort Washington</div>
                                                <div class="email">Email: ThomasMBrooks@example.com</div>
                                                <div class="bday">Birthday: 1956-4-11</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="bd2662436e021123d8e54cdb9f85b55d">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Sandra Madrid</div>
                                                <div class="name">Madrid, Sandra</div>
                                                <div class="city">City: Baltimore</div>
                                                <div class="email">Email: SandraRMadrid@example.com</div>
                                                <div class="bday">Birthday: 1958-3-2</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-o" data-id="66bb47d1ff6b86c8855df8e0c8fcfd1f">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Joyce Olmos</div>
                                                <div class="name">Olmos, Joyce</div>
                                                <div class="city">City: San Diego</div>
                                                <div class="email">Email: JoyceJOlmos@example.com</div>
                                                <div class="bday">Birthday: 1992-8-16</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-r" data-id="afb1a53a4f27712de7602cd3fddc852c">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Margarita Russell</div>
                                                <div class="name">Russell, Margarita</div>
                                                <div class="city">City: Klamath Falls</div>
                                                <div class="email">Email: MargaritaMRussell@example.com</div>
                                                <div class="bday">Birthday: 1937-4-24</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-c" data-id="6158b758e48c4453196e709e13b4e485">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Bertha Campos</div>
                                                <div class="name">Campos, Bertha</div>
                                                <div class="city">City: San Diego</div>
                                                <div class="email">Email: BerthaJCampos@example.com</div>
                                                <div class="bday">Birthday: 1976-10-22</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-f" data-id="fd5d72719279d209d5168ec40a84b152">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">John Furry</div>
                                                <div class="name">Furry, John</div>
                                                <div class="city">City: Bothell</div>
                                                <div class="email">Email: JohnGFurry@example.com</div>
                                                <div class="bday">Birthday: 1971-3-22</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-k" data-id="9c7131ec09401f7af440488470dda175">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Candice Kinsey</div>
                                                <div class="name">Kinsey, Candice</div>
                                                <div class="city">City: Saint Louis</div>
                                                <div class="email">Email: CandiceHKinsey@example.com</div>
                                                <div class="bday">Birthday: 1934-1-6</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="23407a0d5d5c2eb14885fc511295fa3a">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Antonio Wright</div>
                                                <div class="name">Wright, Antonio</div>
                                                <div class="city">City: Kuna</div>
                                                <div class="email">Email: AntonioAWright@example.com</div>
                                                <div class="bday">Birthday: 1956-3-24</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="cf6d11c0234589afea904caadc632a7a">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Timothy Murphy</div>
                                                <div class="name">Murphy, Timothy</div>
                                                <div class="city">City: Vinelz</div>
                                                <div class="email">Email: TimothyCMurphy@example.com</div>
                                                <div class="bday">Birthday: 1931-9-6</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-i" data-id="b357303bbd432313a3e9253adc08a1ce">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Ambrogino Iadanza</div>
                                                <div class="name">Iadanza, Ambrogino</div>
                                                <div class="city">City: BODØ</div>
                                                <div class="email">Email: AmbroginoIadanza@example.com</div>
                                                <div class="bday">Birthday: 1973-8-23</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-h" data-id="41f4a75c8de3c8c740e1c1e4f8f6cfb4">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Robert Hogan</div>
                                                <div class="name">Hogan, Robert</div>
                                                <div class="city">City: Minneapolis</div>
                                                <div class="email">Email: RobertCHogan@example.com</div>
                                                <div class="bday">Birthday: 1986-10-27</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-r" data-id="548c2e986eff12f5b6470d35746a4fa9">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Terry Robinson</div>
                                                <div class="name">Robinson, Terry</div>
                                                <div class="city">City: Annapolis Junction</div>
                                                <div class="email">Email: TerryLRobinson@example.com</div>
                                                <div class="bday">Birthday: 1950-7-18</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-g" data-id="7d79d877b5f35c3fe88741052c23a558">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Avis Gilbert</div>
                                                <div class="name">Gilbert, Avis</div>
                                                <div class="city">City: Sandusky</div>
                                                <div class="email">Email: AvisCGilbert@example.com</div>
                                                <div class="bday">Birthday: 1962-7-19</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-r" data-id="c4c324b0a6bce202162e4a5f1a686746">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Robert Richardson</div>
                                                <div class="name">Richardson, Robert</div>
                                                <div class="city">City: Grayville</div>
                                                <div class="email">Email: RobertDRichardson@example.com</div>
                                                <div class="bday">Birthday: 1962-11-25</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="477c5e9b2edfcea563d6de8d012214fa">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Charles Weiler</div>
                                                <div class="name">Weiler, Charles</div>
                                                <div class="city">City: Corpus Christi</div>
                                                <div class="email">Email: CharlesCWeiler@example.com</div>
                                                <div class="bday">Birthday: 1938-9-26</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-c" data-id="c5e4b1e8c97b9936ddfa4ff9c2103e0b">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Dean Cook</div>
                                                <div class="name">Cook, Dean</div>
                                                <div class="city">City: Richardson</div>
                                                <div class="email">Email: DeanACook@example.com</div>
                                                <div class="bday">Birthday: 1949-6-5</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-y" data-id="03527f1d48c89d5dfaead50702b06937">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Wanda Younkin</div>
                                                <div class="name">Younkin, Wanda</div>
                                                <div class="city">City: Chicago</div>
                                                <div class="email">Email: WandaCYounkin@example.com</div>
                                                <div class="bday">Birthday: 1976-7-13</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-h" data-id="a84077fbe4e76f18d677a2c444ff85e9">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Jill Haugen</div>
                                                <div class="name">Haugen, Jill</div>
                                                <div class="city">City: Louisville</div>
                                                <div class="email">Email: JillJHaugen@example.com</div>
                                                <div class="bday">Birthday: 1984-12-13</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-z" data-id="386c0162b8fa44d12e610893cedb4199">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Betty Zahn</div>
                                                <div class="name">Zahn, Betty</div>
                                                <div class="city">City: Newport News</div>
                                                <div class="email">Email: BettyCZahn@example.com</div>
                                                <div class="bday">Birthday: 1926-9-14</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-l" data-id="e0ce34bdd5bd4c863d97c4d92014a91d">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Debra Lampe</div>
                                                <div class="name">Lampe, Debra</div>
                                                <div class="city">City: Honolulu</div>
                                                <div class="email">Email: DebraJLampe@example.com</div>
                                                <div class="bday">Birthday: 1970-1-18</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-s" data-id="120b52196e882fef4b9bc02e193b14ff">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Alan Shiver</div>
                                                <div class="name">Shiver, Alan</div>
                                                <div class="city">City: East Lansing</div>
                                                <div class="email">Email: AlanMShiver@example.com</div>
                                                <div class="bday">Birthday: 1929-6-6</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-b" data-id="6a511b361e30c9a1ba4dc994a7e929bd">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Denise Barrett</div>
                                                <div class="name">Barrett, Denise</div>
                                                <div class="city">City: Birmingham</div>
                                                <div class="email">Email: DeniseMBarrett@example.com</div>
                                                <div class="bday">Birthday: 1991-2-22</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-b" data-id="c47c333348abc84729b4835c84708d09">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Hazel Bradley</div>
                                                <div class="name">Bradley, Hazel</div>
                                                <div class="city">City: Elyria</div>
                                                <div class="email">Email: HazelSBradley@example.com</div>
                                                <div class="bday">Birthday: 1963-4-10</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="6f00c578cdfc66b816df1bb4ee451dbd">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Earl Mortenson</div>
                                                <div class="name">Mortenson, Earl</div>
                                                <div class="city">City: Ashford</div>
                                                <div class="email">Email: EarlEMortenson@example.com</div>
                                                <div class="bday">Birthday: 1977-10-16</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-d" data-id="0bf303a4b058c5963baba110e7030788">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Carol Dority</div>
                                                <div class="name">Dority, Carol</div>
                                                <div class="city">City: Greenwood</div>
                                                <div class="email">Email: CarolJDority@example.com</div>
                                                <div class="bday">Birthday: 1984-1-11</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-c" data-id="329af3c7792ec3cf2ac938883f41e859">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Joyce Carter</div>
                                                <div class="name">Carter, Joyce</div>
                                                <div class="city">City: Mobile</div>
                                                <div class="email">Email: JoyceJCarter@example.com</div>
                                                <div class="bday">Birthday: 1962-2-19</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-r" data-id="51fd7c59303a19afb6dfe005826e5721">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Kelley Rosario</div>
                                                <div class="name">Rosario, Kelley</div>
                                                <div class="city">City: Battle Creek</div>
                                                <div class="email">Email: KelleyLRosario@example.com</div>
                                                <div class="bday">Birthday: 1949-8-6</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="5ed34fb4358934fc9aa699f05258e100">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Theresa Mayne</div>
                                                <div class="name">Mayne, Theresa</div>
                                                <div class="city">City: Fort Worth</div>
                                                <div class="email">Email: TheresaGMayne@example.com</div>
                                                <div class="bday">Birthday: 1938-8-17</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-p" data-id="42dd80dba2250d4928d30df28cb1cf33">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Maximilian Propst</div>
                                                <div class="name">Propst, Maximilian</div>
                                                <div class="city">City: Dallas</div>
                                                <div class="email">Email: MaximilianPropst@example.com</div>
                                                <div class="bday">Birthday: 1963-4-11</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-j" data-id="53ed68285c7efdc1eccf678b66800fa8">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Victoria Jose</div>
                                                <div class="name">Jose, Victoria</div>
                                                <div class="city">City: Cape Girardeau</div>
                                                <div class="email">Email: VictoriaRJose@example.com</div>
                                                <div class="bday">Birthday: 1947-6-2</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-v" data-id="8a184b436fef1e59296221586dbfdb22">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Carlton Vannoy</div>
                                                <div class="name">Vannoy, Carlton</div>
                                                <div class="city">City: Fort Smith</div>
                                                <div class="email">Email: CarltonKVannoy@example.com</div>
                                                <div class="bday">Birthday: 1966-10-23</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-d" data-id="c821f97ea4bb4b279417610c20312147">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Rosetta Delagarza</div>
                                                <div class="name">Delagarza, Rosetta</div>
                                                <div class="city">City: Pleasant Plains</div>
                                                <div class="email">Email: RosettaHDelagarza@example.com</div>
                                                <div class="bday">Birthday: 1948-2-29</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-g" data-id="e03951303d749c3482e149a843c517b2">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">James Grubbs</div>
                                                <div class="name">Grubbs, James</div>
                                                <div class="city">City: Brunsville</div>
                                                <div class="email">Email: JamesPGrubbs@example.com</div>
                                                <div class="bday">Birthday: 1938-11-3</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-d" data-id="ff0be776a2f227f5fe698bd452ad9d29">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Devin Deangelis</div>
                                                <div class="name">Deangelis, Devin</div>
                                                <div class="city">City: Tukwila</div>
                                                <div class="email">Email: DevinLDeangelis@example.com</div>
                                                <div class="bday">Birthday: 1991-4-9</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="88abe03da79cf76118f56bfd8e4e5ada">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Winifred Williams</div>
                                                <div class="name">Williams, Winifred</div>
                                                <div class="city">City: Buford</div>
                                                <div class="email">Email: WinifredCWilliams@example.com</div>
                                                <div class="bday">Birthday: 1979-11-10</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="aa582be5d953b4b83baafe0c803d37c5">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Hattie Mendoza</div>
                                                <div class="name">Mendoza, Hattie</div>
                                                <div class="city">City: Essex Junction</div>
                                                <div class="email">Email: HattieLMendoza@example.com</div>
                                                <div class="bday">Birthday: 1950-2-9</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-e" data-id="8e3d4e872e26b85aff5c2ddd75c0d752">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Samantha Eatmon</div>
                                                <div class="name">Eatmon, Samantha</div>
                                                <div class="city">City: Washington</div>
                                                <div class="email">Email: SamanthaAEatmon@example.com</div>
                                                <div class="bday">Birthday: 1953-9-10</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-v" data-id="7d7bd5cbb2cd8a24d4f30bff52313359">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Vernon Vaughan</div>
                                                <div class="name">Vaughan, Vernon</div>
                                                <div class="city">City: Jeffersonville</div>
                                                <div class="email">Email: VernonAVaughan@example.com</div>
                                                <div class="bday">Birthday: 1938-4-11</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-l" data-id="217878d90e9b632c231bf62a90580e0a">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Brian Luke</div>
                                                <div class="name">Luke, Brian</div>
                                                <div class="city">City: Beaverton</div>
                                                <div class="email">Email: BrianRLuke@example.com</div>
                                                <div class="bday">Birthday: 1942-9-3</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="de27a0ad799bbec3e748b49fd4176da9">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Faith Minder</div>
                                                <div class="name">Minder, Faith</div>
                                                <div class="city">City: Mansfield</div>
                                                <div class="email">Email: FaithWMinder@example.com</div>
                                                <div class="bday">Birthday: 1931-7-26</div>
                                            </li>
                                                                                </ul>
                                    </section>
                                </div>
                            </div>
                            
                            <div class="grid_6 leading">
                                <div class="grid_2 alpha">
                                    <div id="slider">
                                        <a class="prev"><span class="arrow"></span></a>
                                        <div class="scrollable">
                                            <ul class="items">
                                                <li id="a" class="item"><a name="a" class="title">A</a> 
                                                    <ul> 
                                                        <li><a href="#">Adam</a></li> 
                                                        <li><a href="#">Alex</a></li> 
                                                        <li><a href="#">Ali</a></li> 
                                                        <li><a href="#">Apple</a></li> 
                                                        <li><a href="#">Arthur</a></li> 
                                                        <li><a href="#">Ashley</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="b" class="item"><a name="b" class="title">B</a> 
                                                    <ul> 
                                                        <li><a href="#">Barry</a></li> 
                                                        <li><a href="#">Becky</a></li> 
                                                        <li><a href="#">Biff</a></li> 
                                                        <li><a href="#">Billy</a></li> 
                                                        <li><a href="#">Bozarking</a></li> 
                                                        <li><a href="#">Bryan</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="c" class="item"><a name="c" class="title">c</a> 
                                                    <ul> 
                                                        <li><a href="#">Calista</a></li> 
                                                        <li><a href="#">Cathy</a></li> 
                                                        <li><a href="#">Chris</a></li> 
                                                        <li><a href="#">Cinderella</a></li> 
                                                        <li><a href="#">Corky</a></li> 
                                                        <li><a href="#">Cypher</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="d" class="item"><a name="d" class="title">d</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="e" class="item"><a name="e" class="title">E</a> 
                                                    <ul> 
                                                        <li><a href="#">Barry</a></li> 
                                                        <li><a href="#">Becky</a></li> 
                                                        <li><a href="#">Biff</a></li> 
                                                        <li><a href="#">Billy</a></li> 
                                                        <li><a href="#">Bozarking</a></li> 
                                                        <li><a href="#">Bryan</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="f" class="item"><a name="f" class="title">f</a> 
                                                    <ul> 
                                                        <li><a href="#">Calista</a></li> 
                                                        <li><a href="#">Cathy</a></li> 
                                                        <li><a href="#">Chris</a></li> 
                                                        <li><a href="#">Cinderella</a></li> 
                                                        <li><a href="#">Corky</a></li> 
                                                        <li><a href="#">Cypher</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="g" class="item"><a name="g" class="title">g</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="h" class="item"><a name="h" class="title">h</a> 
                                                    <ul> 
                                                        <li><a href="#">Barry</a></li> 
                                                        <li><a href="#">Becky</a></li> 
                                                        <li><a href="#">Biff</a></li> 
                                                        <li><a href="#">Billy</a></li> 
                                                        <li><a href="#">Bozarking</a></li> 
                                                        <li><a href="#">Bryan</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="i" class="item"><a name="i" class="title">i</a> 
                                                    <ul> 
                                                        <li><a href="#">Calista</a></li> 
                                                        <li><a href="#">Cathy</a></li> 
                                                        <li><a href="#">Chris</a></li> 
                                                        <li><a href="#">Cinderella</a></li> 
                                                        <li><a href="#">Corky</a></li> 
                                                        <li><a href="#">Cypher</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="j" class="item"><a name="j" class="title">j</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="k" class="item"><a name="k" class="title">k</a> 
                                                    <ul> 
                                                        <li><a href="#">Barry</a></li> 
                                                        <li><a href="#">Becky</a></li> 
                                                        <li><a href="#">Biff</a></li> 
                                                        <li><a href="#">Billy</a></li> 
                                                        <li><a href="#">Bozarking</a></li> 
                                                        <li><a href="#">Bryan</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="l" class="item"><a name="l" class="title">l</a> 
                                                    <ul> 
                                                        <li><a href="#">Calista</a></li> 
                                                        <li><a href="#">Cathy</a></li> 
                                                        <li><a href="#">Chris</a></li> 
                                                        <li><a href="#">Cinderella</a></li> 
                                                        <li><a href="#">Corky</a></li> 
                                                        <li><a href="#">Cypher</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="m" class="item"><a name="m" class="title">m</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="n" class="item"><a name="n" class="title">n</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="o" class="item"><a name="o" class="title">o</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="p" class="item"><a name="p" class="title">p</a> 
                                                    <ul> 
                                                        <li><a href="#">Barry</a></li> 
                                                        <li><a href="#">Becky</a></li> 
                                                        <li><a href="#">Biff</a></li> 
                                                        <li><a href="#">Billy</a></li> 
                                                        <li><a href="#">Bozarking</a></li> 
                                                        <li><a href="#">Bryan</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="q" class="item"><a name="q" class="title">q</a> 
                                                    <ul> 
                                                        <li><a href="#">Calista</a></li> 
                                                        <li><a href="#">Cathy</a></li> 
                                                        <li><a href="#">Chris</a></li> 
                                                        <li><a href="#">Cinderella</a></li> 
                                                        <li><a href="#">Corky</a></li> 
                                                        <li><a href="#">Cypher</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="r" class="item"><a name="r" class="title">r</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="s" class="item"><a name="s" class="title">s</a> 
                                                    <ul> 
                                                        <li><a href="#">Barry</a></li> 
                                                        <li><a href="#">Becky</a></li> 
                                                        <li><a href="#">Biff</a></li> 
                                                        <li><a href="#">Billy</a></li> 
                                                        <li><a href="#">Bozarking</a></li> 
                                                        <li><a href="#">Bryan</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="t" class="item"><a name="t" class="title">t</a> 
                                                    <ul> 
                                                        <li><a href="#">Calista</a></li> 
                                                        <li><a href="#">Cathy</a></li> 
                                                        <li><a href="#">Chris</a></li> 
                                                        <li><a href="#">Cinderella</a></li> 
                                                        <li><a href="#">Corky</a></li> 
                                                        <li><a href="#">Cypher</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="u" class="item"><a name="u" class="title">u</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="v" class="item"><a name="v" class="title">v</a> 
                                                    <ul> 
                                                        <li><a href="#">Barry</a></li> 
                                                        <li><a href="#">Becky</a></li> 
                                                        <li><a href="#">Biff</a></li> 
                                                        <li><a href="#">Billy</a></li> 
                                                        <li><a href="#">Bozarking</a></li> 
                                                        <li><a href="#">Bryan</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="w" class="item"><a name="w" class="title">w</a> 
                                                    <ul> 
                                                        <li><a href="#">Calista</a></li> 
                                                        <li><a href="#">Cathy</a></li> 
                                                        <li><a href="#">Chris</a></li> 
                                                        <li><a href="#">Cinderella</a></li> 
                                                        <li><a href="#">Corky</a></li> 
                                                        <li><a href="#">Cypher</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="x" class="item"><a name="x" class="title">x</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="y" class="item"><a name="y" class="title">y</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="z" class="item"><a name="z" class="title">z</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                            </ul> 
                                        </div>
                                        <a class="next"><span class="arrow"></span></a>
                                    </div>
                                </div>
                                    <div class="grid_4 omega">
                                    <h3>A Better Apple Style Slider</h3>
                                    Add vertical sliding content using an index navigation bar with smooth scrolling animation. Inspired by the iPhone contacts application, this widget is used mainly for alphabetical contact listings, but other applications are possible.
                                    
                                    <h3 class="leading">Basic Usage</h3>
                                    <h4>HTML</h4>
                                    <pre class="prettyprint linenums lang-html">
&lt;div id=&quot;slider&quot;&gt;
    &lt;a class=&quot;prev&quot;&gt;&lt;span class=&quot;arrow&quot;&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;div class=&quot;scrollable&quot;&gt;
        &lt;ul class=&quot;items&quot;&gt;<div class="main-content">
                        <header>
                            <ul class="action-buttons clearfix">
                                <li><a href="../account" class="button" data-icon-primary="ui-icon-wrench" data-icon-only="true">Options</a></li>
                                <li><a href="../documentation/index.html" class="button help" rel="#overlay" data-icon-primary="ui-icon-help" data-icon-only="true">Help</a></li>
                            </ul>
                            <h2>
                                Contacts
                            </h2>
                        </header>
                        <section class="container_6 clearfix">                           
                            <div class="grid_6">
                                <div class="portlet">
                                    <header>
                                        <h2>Sortable Contacts</h2>
                                    </header>
                                    <form id="isotope-contacts-filter" class="ui-widget-header ui-state-default clearfix">
                                        <span class="buttonset" id="isotope-contacts-index">
                                            <input type="radio" name="index" id="index-a" value=".index-a" checked="checked"><label for="index-a">A</label>
                                            <input type="radio" name="index" id="index-b" value=".index-b"><label for="index-b">B</label>
                                            <input type="radio" name="index" id="index-c" value=".index-c"><label for="index-c">C</label>
                                            <input type="radio" name="index" id="index-d" value=".index-d"><label for="index-d">D</label>
                                            <input type="radio" name="index" id="index-e" value=".index-e"><label for="index-e">E</label>
                                            <input type="radio" name="index" id="index-f" value=".index-f"><label for="index-f">F</label>
                                            <input type="radio" name="index" id="index-g" value=".index-g"><label for="index-g">G</label>
                                            <input type="radio" name="index" id="index-h" value=".index-h"><label for="index-h">H</label>
                                            <input type="radio" name="index" id="index-i" value=".index-i"><label for="index-i">I</label>
                                            <input type="radio" name="index" id="index-j" value=".index-j"><label for="index-j">J</label>
                                            <input type="radio" name="index" id="index-k" value=".index-k"><label for="index-k">K</label>
                                            <input type="radio" name="index" id="index-l" value=".index-l"><label for="index-l">L</label>
                                            <input type="radio" name="index" id="index-m" value=".index-m"><label for="index-m">M</label>
                                            <input type="radio" name="index" id="index-n" value=".index-n"><label for="index-n">N</label>
                                            <input type="radio" name="index" id="index-o" value=".index-o"><label for="index-o">O</label>
                                            <input type="radio" name="index" id="index-p" value=".index-p"><label for="index-p">P</label>
                                            <input type="radio" name="index" id="index-q" value=".index-q"><label for="index-q">Q</label>
                                            <input type="radio" name="index" id="index-r" value=".index-r"><label for="index-r">R</label>
                                            <input type="radio" name="index" id="index-s" value=".index-s"><label for="index-s">S</label>
                                            <input type="radio" name="index" id="index-t" value=".index-t"><label for="index-t">T</label>
                                            <input type="radio" name="index" id="index-u" value=".index-u"><label for="index-u">U</label>
                                            <input type="radio" name="index" id="index-v" value=".index-v"><label for="index-v">V</label>
                                            <input type="radio" name="index" id="index-w" value=".index-w"><label for="index-w">W</label>
                                            <input type="radio" name="index" id="index-x" value=".index-x"><label for="index-x">X</label>
                                            <input type="radio" name="index" id="index-y" value=".index-y"><label for="index-y">Y</label>
                                            <input type="radio" name="index" id="index-z" value=".index-z"><label for="index-z">Z</label>
                                            <input type="radio" name="index" id="index-all" value="*"><label for="index-all">All</label>
                                        </span>
                                        <hr />
                                        <span class="buttonset" id="isotope-contacts-sort">
                                            <input type="radio" name="sort" id="sort-firstname" value="fullname" checked="checked"><label for="sort-firstname">First Name</label>      
                                            <input type="radio" name="sort" id="sort-lastname" value="name"><label for="sort-lastname">Last Name</label>      
                                            <input type="radio" name="sort" id="sort-bday" value="bday"><label for="sort-bday">Birthday</label>
                                        </span>
                                    </form>
                                    <section>
                                        <ul class="isotope-contacts clearfix">
                                                                                    <li class="button-blue ui-corner-all index-p" data-id="66f6d7ff16d37e3bde9643358c98cfe1">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Charlotte Pullen</div>
                                                <div class="name">Pullen, Charlotte</div>
                                                <div class="city">City: Antioch</div>
                                                <div class="email">Email: CharlotteBPullen@example.com</div>
                                                <div class="bday">Birthday: 1940-9-5</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-k" data-id="bcd25054edf383c3f5154bf98084f8a6">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Velma Keeton</div>
                                                <div class="name">Keeton, Velma</div>
                                                <div class="city">City: Lexington</div>
                                                <div class="email">Email: VelmaJKeeton@example.com</div>
                                                <div class="bday">Birthday: 1991-2-26</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-b" data-id="b3869c81ff2c12d0be71b0bcecf70fc4">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Debra Bryant</div>
                                                <div class="name">Bryant, Debra</div>
                                                <div class="city">City: Cambridge</div>
                                                <div class="email">Email: DebraGBryant@example.com</div>
                                                <div class="bday">Birthday: 1949-6-1</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-p" data-id="fac966a9a5a4b273ac162dbe130bc9ab">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Catrina Pickett</div>
                                                <div class="name">Pickett, Catrina</div>
                                                <div class="city">City: Brookfield</div>
                                                <div class="email">Email: CatrinaSPickett@example.com</div>
                                                <div class="bday">Birthday: 1964-6-22</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-a" data-id="4975cfc1717e0f7f1f8387bc3d78b78e">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Harvey Anderson</div>
                                                <div class="name">Anderson, Harvey</div>
                                                <div class="city">City: ÅLESUND</div>
                                                <div class="email">Email: HarveyAAnderson@example.com</div>
                                                <div class="bday">Birthday: 1930-7-31</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-a" data-id="0e0678531c72bfefd18ec2eba8cb3ff7">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Lindsay Ayala</div>
                                                <div class="name">Ayala, Lindsay</div>
                                                <div class="city">City: YTRE ARNA</div>
                                                <div class="email">Email: LindsayRAyala@example.com</div>
                                                <div class="bday">Birthday: 1986-9-25</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-d" data-id="b93a2f82c742f15c9454105b19b13de4">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Roberto Dombrowski</div>
                                                <div class="name">Dombrowski, Roberto</div>
                                                <div class="city">City: Albany</div>
                                                <div class="email">Email: RobertoLDombrowski@example.com</div>
                                                <div class="bday">Birthday: 1945-9-5</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-z" data-id="f1770159bcdffc8dd343c8fa47785468">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Jonas Ziegler</div>
                                                <div class="name">Ziegler, Jonas</div>
                                                <div class="city">City: Saint Paul</div>
                                                <div class="email">Email: JonasZiegler@example.com</div>
                                                <div class="bday">Birthday: 1946-6-20</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="944afbc14dbaf07c52809ed56725fe7f">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Denise Mahn</div>
                                                <div class="name">Mahn, Denise</div>
                                                <div class="city">City: Crafton</div>
                                                <div class="email">Email: DeniseJMahn@example.com</div>
                                                <div class="bday">Birthday: 1969-4-6</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-b" data-id="74d1a31d3458964b0da01718fa195e3d">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Richard Broadbent</div>
                                                <div class="name">Broadbent, Richard</div>
                                                <div class="city">City: Towson</div>
                                                <div class="email">Email: RichardMBroadbent@example.com</div>
                                                <div class="bday">Birthday: 1971-12-20</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-r" data-id="cbbc73874d004e4b11ce4f5667ce3bb9">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Julia Rose</div>
                                                <div class="name">Rose, Julia</div>
                                                <div class="city">City: Eugene</div>
                                                <div class="email">Email: JuliaRRose@example.com</div>
                                                <div class="bday">Birthday: 1958-6-15</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-j" data-id="78201d875d70899f17e2d660bb96aa45">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Marilyn Jones</div>
                                                <div class="name">Jones, Marilyn</div>
                                                <div class="city">City: Framingham</div>
                                                <div class="email">Email: MarilynMJones@example.com</div>
                                                <div class="bday">Birthday: 1949-9-24</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-c" data-id="dccc08b9ebefec2f45e0d08dd13e0ab5">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Rosa Camire</div>
                                                <div class="name">Camire, Rosa</div>
                                                <div class="city">City: Los Angeles</div>
                                                <div class="email">Email: RosaRCamire@example.com</div>
                                                <div class="bday">Birthday: 1972-8-30</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-l" data-id="050db4311ae764882540fda3649733ab">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Kevin Laing</div>
                                                <div class="name">Laing, Kevin</div>
                                                <div class="city">City: Lake Butler</div>
                                                <div class="email">Email: KevinJLaing@example.com</div>
                                                <div class="bday">Birthday: 1980-2-24</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-s" data-id="9e9dd6db8675fe82bcd708f01e7548f2">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Daniel Spaulding</div>
                                                <div class="name">Spaulding, Daniel</div>
                                                <div class="city">City: Pittsburgh</div>
                                                <div class="email">Email: DanielRSpaulding@example.com</div>
                                                <div class="bday">Birthday: 1949-3-23</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-r" data-id="b4d81b169130f3df143202b9196c1643">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Melissa Rich</div>
                                                <div class="name">Rich, Melissa</div>
                                                <div class="city">City: Park City</div>
                                                <div class="email">Email: MelissaERich@example.com</div>
                                                <div class="bday">Birthday: 1989-8-27</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="6e8639047b6868a6cca17ca563008ed7">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Lorraine Watts</div>
                                                <div class="name">Watts, Lorraine</div>
                                                <div class="city">City: Clearwater</div>
                                                <div class="email">Email: LorraineJWatts@example.com</div>
                                                <div class="bday">Birthday: 1933-8-30</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-s" data-id="e1803a5fb0aa3c4156218b1749170d2d">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Katie Sleeper</div>
                                                <div class="name">Sleeper, Katie</div>
                                                <div class="city">City: North Gulf Beach</div>
                                                <div class="email">Email: KatieJSleeper@example.com</div>
                                                <div class="bday">Birthday: 1941-12-10</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="ffe55aef032f50367b4e67683dbddec5">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">John Marshall</div>
                                                <div class="name">Marshall, John</div>
                                                <div class="city">City: Salt Lake City</div>
                                                <div class="email">Email: JohnCMarshall@example.com</div>
                                                <div class="bday">Birthday: 1950-6-1</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="9a65e72ef0c49d38b20075dcf44e5681">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Melody Maus</div>
                                                <div class="name">Maus, Melody</div>
                                                <div class="city">City: Detroit</div>
                                                <div class="email">Email: MelodyWMaus@example.com</div>
                                                <div class="bday">Birthday: 1931-4-11</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="a36f7fe79436bed2bbabbad921d9b473">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Eileen Mitchell</div>
                                                <div class="name">Mitchell, Eileen</div>
                                                <div class="city">City: Lexington</div>
                                                <div class="email">Email: EileenFMitchell@example.com</div>
                                                <div class="bday">Birthday: 1962-7-9</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-e" data-id="a931f9ee717c7d6afe00a15fd124691f">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Steven Evans</div>
                                                <div class="name">Evans, Steven</div>
                                                <div class="city">City: Ashland</div>
                                                <div class="email">Email: StevenFEvans@example.com</div>
                                                <div class="bday">Birthday: 1951-7-15</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="1f17b05bba1736d06ea2055decda0bf0">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Robert Mcadoo</div>
                                                <div class="name">Mcadoo, Robert</div>
                                                <div class="city">City: Chicago</div>
                                                <div class="email">Email: RobertBMcadoo@example.com</div>
                                                <div class="bday">Birthday: 1989-3-13</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="f16f96882b7822c9a6b57fa8e75414f8">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Cynthia Morgan</div>
                                                <div class="name">Morgan, Cynthia</div>
                                                <div class="city">City: Sayreville</div>
                                                <div class="email">Email: CynthiaVMorgan@example.com</div>
                                                <div class="bday">Birthday: 1947-2-18</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-d" data-id="7702bbff127fdc8ba23eb75739493112">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Rose Davis</div>
                                                <div class="name">Davis, Rose</div>
                                                <div class="city">City: Tampa</div>
                                                <div class="email">Email: RoseLDavis@example.com</div>
                                                <div class="bday">Birthday: 1987-5-23</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="7d5e4db1319e227cf34dcff350ab7a15">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Thomas Woods</div>
                                                <div class="name">Woods, Thomas</div>
                                                <div class="city">City: San Diego</div>
                                                <div class="email">Email: ThomasBWoods@example.com</div>
                                                <div class="bday">Birthday: 1972-10-26</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="8a01d4754c664d077219fa2cc4257dcf">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Helen Williams</div>
                                                <div class="name">Williams, Helen</div>
                                                <div class="city">City: Portland</div>
                                                <div class="email">Email: HelenCWilliams@example.com</div>
                                                <div class="bday">Birthday: 1933-12-1</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-s" data-id="a29c80ed0ac6c605e2f58474fccd55f2">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Dawn Stanford</div>
                                                <div class="name">Stanford, Dawn</div>
                                                <div class="city">City: Vidor</div>
                                                <div class="email">Email: DawnMStanford@example.com</div>
                                                <div class="bday">Birthday: 1953-8-10</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="49ff4bf57b8bf40baed15bf2d2abc1c3">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Luis Watson</div>
                                                <div class="name">Watson, Luis</div>
                                                <div class="city">City: Los Angeles</div>
                                                <div class="email">Email: LuisKWatson@example.com</div>
                                                <div class="bday">Birthday: 1944-12-18</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="eae7fe85318def2e4335591490b9f461">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Milagros Webster</div>
                                                <div class="name">Webster, Milagros</div>
                                                <div class="city">City: Ogden</div>
                                                <div class="email">Email: MilagrosJWebster@example.com</div>
                                                <div class="bday">Birthday: 1987-2-9</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-c" data-id="2c934baca98ef1d994e936563320921c">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Laura Coleman</div>
                                                <div class="name">Coleman, Laura</div>
                                                <div class="city">City: Manchester</div>
                                                <div class="email">Email: LauraBColeman@example.com</div>
                                                <div class="bday">Birthday: 1963-10-8</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-t" data-id="ef2b00873d32ddcb2331605ddb042000">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Michelle Tate</div>
                                                <div class="name">Tate, Michelle</div>
                                                <div class="city">City: Wendover</div>
                                                <div class="email">Email: MichelleLTate@example.com</div>
                                                <div class="bday">Birthday: 1962-4-16</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-b" data-id="03ad1931ca46e2c6ae113287315fa817">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Thomas Brooks</div>
                                                <div class="name">Brooks, Thomas</div>
                                                <div class="city">City: Fort Washington</div>
                                                <div class="email">Email: ThomasMBrooks@example.com</div>
                                                <div class="bday">Birthday: 1956-4-11</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="bd2662436e021123d8e54cdb9f85b55d">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Sandra Madrid</div>
                                                <div class="name">Madrid, Sandra</div>
                                                <div class="city">City: Baltimore</div>
                                                <div class="email">Email: SandraRMadrid@example.com</div>
                                                <div class="bday">Birthday: 1958-3-2</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-o" data-id="66bb47d1ff6b86c8855df8e0c8fcfd1f">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Joyce Olmos</div>
                                                <div class="name">Olmos, Joyce</div>
                                                <div class="city">City: San Diego</div>
                                                <div class="email">Email: JoyceJOlmos@example.com</div>
                                                <div class="bday">Birthday: 1992-8-16</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-r" data-id="afb1a53a4f27712de7602cd3fddc852c">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Margarita Russell</div>
                                                <div class="name">Russell, Margarita</div>
                                                <div class="city">City: Klamath Falls</div>
                                                <div class="email">Email: MargaritaMRussell@example.com</div>
                                                <div class="bday">Birthday: 1937-4-24</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-c" data-id="6158b758e48c4453196e709e13b4e485">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Bertha Campos</div>
                                                <div class="name">Campos, Bertha</div>
                                                <div class="city">City: San Diego</div>
                                                <div class="email">Email: BerthaJCampos@example.com</div>
                                                <div class="bday">Birthday: 1976-10-22</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-f" data-id="fd5d72719279d209d5168ec40a84b152">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">John Furry</div>
                                                <div class="name">Furry, John</div>
                                                <div class="city">City: Bothell</div>
                                                <div class="email">Email: JohnGFurry@example.com</div>
                                                <div class="bday">Birthday: 1971-3-22</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-k" data-id="9c7131ec09401f7af440488470dda175">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Candice Kinsey</div>
                                                <div class="name">Kinsey, Candice</div>
                                                <div class="city">City: Saint Louis</div>
                                                <div class="email">Email: CandiceHKinsey@example.com</div>
                                                <div class="bday">Birthday: 1934-1-6</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="23407a0d5d5c2eb14885fc511295fa3a">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Antonio Wright</div>
                                                <div class="name">Wright, Antonio</div>
                                                <div class="city">City: Kuna</div>
                                                <div class="email">Email: AntonioAWright@example.com</div>
                                                <div class="bday">Birthday: 1956-3-24</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="cf6d11c0234589afea904caadc632a7a">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Timothy Murphy</div>
                                                <div class="name">Murphy, Timothy</div>
                                                <div class="city">City: Vinelz</div>
                                                <div class="email">Email: TimothyCMurphy@example.com</div>
                                                <div class="bday">Birthday: 1931-9-6</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-i" data-id="b357303bbd432313a3e9253adc08a1ce">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Ambrogino Iadanza</div>
                                                <div class="name">Iadanza, Ambrogino</div>
                                                <div class="city">City: BODØ</div>
                                                <div class="email">Email: AmbroginoIadanza@example.com</div>
                                                <div class="bday">Birthday: 1973-8-23</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-h" data-id="41f4a75c8de3c8c740e1c1e4f8f6cfb4">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Robert Hogan</div>
                                                <div class="name">Hogan, Robert</div>
                                                <div class="city">City: Minneapolis</div>
                                                <div class="email">Email: RobertCHogan@example.com</div>
                                                <div class="bday">Birthday: 1986-10-27</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-r" data-id="548c2e986eff12f5b6470d35746a4fa9">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Terry Robinson</div>
                                                <div class="name">Robinson, Terry</div>
                                                <div class="city">City: Annapolis Junction</div>
                                                <div class="email">Email: TerryLRobinson@example.com</div>
                                                <div class="bday">Birthday: 1950-7-18</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-g" data-id="7d79d877b5f35c3fe88741052c23a558">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Avis Gilbert</div>
                                                <div class="name">Gilbert, Avis</div>
                                                <div class="city">City: Sandusky</div>
                                                <div class="email">Email: AvisCGilbert@example.com</div>
                                                <div class="bday">Birthday: 1962-7-19</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-r" data-id="c4c324b0a6bce202162e4a5f1a686746">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Robert Richardson</div>
                                                <div class="name">Richardson, Robert</div>
                                                <div class="city">City: Grayville</div>
                                                <div class="email">Email: RobertDRichardson@example.com</div>
                                                <div class="bday">Birthday: 1962-11-25</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="477c5e9b2edfcea563d6de8d012214fa">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Charles Weiler</div>
                                                <div class="name">Weiler, Charles</div>
                                                <div class="city">City: Corpus Christi</div>
                                                <div class="email">Email: CharlesCWeiler@example.com</div>
                                                <div class="bday">Birthday: 1938-9-26</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-c" data-id="c5e4b1e8c97b9936ddfa4ff9c2103e0b">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Dean Cook</div>
                                                <div class="name">Cook, Dean</div>
                                                <div class="city">City: Richardson</div>
                                                <div class="email">Email: DeanACook@example.com</div>
                                                <div class="bday">Birthday: 1949-6-5</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-y" data-id="03527f1d48c89d5dfaead50702b06937">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Wanda Younkin</div>
                                                <div class="name">Younkin, Wanda</div>
                                                <div class="city">City: Chicago</div>
                                                <div class="email">Email: WandaCYounkin@example.com</div>
                                                <div class="bday">Birthday: 1976-7-13</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-h" data-id="a84077fbe4e76f18d677a2c444ff85e9">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Jill Haugen</div>
                                                <div class="name">Haugen, Jill</div>
                                                <div class="city">City: Louisville</div>
                                                <div class="email">Email: JillJHaugen@example.com</div>
                                                <div class="bday">Birthday: 1984-12-13</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-z" data-id="386c0162b8fa44d12e610893cedb4199">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Betty Zahn</div>
                                                <div class="name">Zahn, Betty</div>
                                                <div class="city">City: Newport News</div>
                                                <div class="email">Email: BettyCZahn@example.com</div>
                                                <div class="bday">Birthday: 1926-9-14</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-l" data-id="e0ce34bdd5bd4c863d97c4d92014a91d">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Debra Lampe</div>
                                                <div class="name">Lampe, Debra</div>
                                                <div class="city">City: Honolulu</div>
                                                <div class="email">Email: DebraJLampe@example.com</div>
                                                <div class="bday">Birthday: 1970-1-18</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-s" data-id="120b52196e882fef4b9bc02e193b14ff">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Alan Shiver</div>
                                                <div class="name">Shiver, Alan</div>
                                                <div class="city">City: East Lansing</div>
                                                <div class="email">Email: AlanMShiver@example.com</div>
                                                <div class="bday">Birthday: 1929-6-6</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-b" data-id="6a511b361e30c9a1ba4dc994a7e929bd">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Denise Barrett</div>
                                                <div class="name">Barrett, Denise</div>
                                                <div class="city">City: Birmingham</div>
                                                <div class="email">Email: DeniseMBarrett@example.com</div>
                                                <div class="bday">Birthday: 1991-2-22</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-b" data-id="c47c333348abc84729b4835c84708d09">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Hazel Bradley</div>
                                                <div class="name">Bradley, Hazel</div>
                                                <div class="city">City: Elyria</div>
                                                <div class="email">Email: HazelSBradley@example.com</div>
                                                <div class="bday">Birthday: 1963-4-10</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="6f00c578cdfc66b816df1bb4ee451dbd">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Earl Mortenson</div>
                                                <div class="name">Mortenson, Earl</div>
                                                <div class="city">City: Ashford</div>
                                                <div class="email">Email: EarlEMortenson@example.com</div>
                                                <div class="bday">Birthday: 1977-10-16</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-d" data-id="0bf303a4b058c5963baba110e7030788">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Carol Dority</div>
                                                <div class="name">Dority, Carol</div>
                                                <div class="city">City: Greenwood</div>
                                                <div class="email">Email: CarolJDority@example.com</div>
                                                <div class="bday">Birthday: 1984-1-11</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-c" data-id="329af3c7792ec3cf2ac938883f41e859">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Joyce Carter</div>
                                                <div class="name">Carter, Joyce</div>
                                                <div class="city">City: Mobile</div>
                                                <div class="email">Email: JoyceJCarter@example.com</div>
                                                <div class="bday">Birthday: 1962-2-19</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-r" data-id="51fd7c59303a19afb6dfe005826e5721">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Kelley Rosario</div>
                                                <div class="name">Rosario, Kelley</div>
                                                <div class="city">City: Battle Creek</div>
                                                <div class="email">Email: KelleyLRosario@example.com</div>
                                                <div class="bday">Birthday: 1949-8-6</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="5ed34fb4358934fc9aa699f05258e100">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Theresa Mayne</div>
                                                <div class="name">Mayne, Theresa</div>
                                                <div class="city">City: Fort Worth</div>
                                                <div class="email">Email: TheresaGMayne@example.com</div>
                                                <div class="bday">Birthday: 1938-8-17</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-p" data-id="42dd80dba2250d4928d30df28cb1cf33">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Maximilian Propst</div>
                                                <div class="name">Propst, Maximilian</div>
                                                <div class="city">City: Dallas</div>
                                                <div class="email">Email: MaximilianPropst@example.com</div>
                                                <div class="bday">Birthday: 1963-4-11</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-j" data-id="53ed68285c7efdc1eccf678b66800fa8">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Victoria Jose</div>
                                                <div class="name">Jose, Victoria</div>
                                                <div class="city">City: Cape Girardeau</div>
                                                <div class="email">Email: VictoriaRJose@example.com</div>
                                                <div class="bday">Birthday: 1947-6-2</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-v" data-id="8a184b436fef1e59296221586dbfdb22">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Carlton Vannoy</div>
                                                <div class="name">Vannoy, Carlton</div>
                                                <div class="city">City: Fort Smith</div>
                                                <div class="email">Email: CarltonKVannoy@example.com</div>
                                                <div class="bday">Birthday: 1966-10-23</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-d" data-id="c821f97ea4bb4b279417610c20312147">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Rosetta Delagarza</div>
                                                <div class="name">Delagarza, Rosetta</div>
                                                <div class="city">City: Pleasant Plains</div>
                                                <div class="email">Email: RosettaHDelagarza@example.com</div>
                                                <div class="bday">Birthday: 1948-2-29</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-g" data-id="e03951303d749c3482e149a843c517b2">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">James Grubbs</div>
                                                <div class="name">Grubbs, James</div>
                                                <div class="city">City: Brunsville</div>
                                                <div class="email">Email: JamesPGrubbs@example.com</div>
                                                <div class="bday">Birthday: 1938-11-3</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-d" data-id="ff0be776a2f227f5fe698bd452ad9d29">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Devin Deangelis</div>
                                                <div class="name">Deangelis, Devin</div>
                                                <div class="city">City: Tukwila</div>
                                                <div class="email">Email: DevinLDeangelis@example.com</div>
                                                <div class="bday">Birthday: 1991-4-9</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-w" data-id="88abe03da79cf76118f56bfd8e4e5ada">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Winifred Williams</div>
                                                <div class="name">Williams, Winifred</div>
                                                <div class="city">City: Buford</div>
                                                <div class="email">Email: WinifredCWilliams@example.com</div>
                                                <div class="bday">Birthday: 1979-11-10</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="aa582be5d953b4b83baafe0c803d37c5">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Hattie Mendoza</div>
                                                <div class="name">Mendoza, Hattie</div>
                                                <div class="city">City: Essex Junction</div>
                                                <div class="email">Email: HattieLMendoza@example.com</div>
                                                <div class="bday">Birthday: 1950-2-9</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-e" data-id="8e3d4e872e26b85aff5c2ddd75c0d752">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Samantha Eatmon</div>
                                                <div class="name">Eatmon, Samantha</div>
                                                <div class="city">City: Washington</div>
                                                <div class="email">Email: SamanthaAEatmon@example.com</div>
                                                <div class="bday">Birthday: 1953-9-10</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-v" data-id="7d7bd5cbb2cd8a24d4f30bff52313359">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Vernon Vaughan</div>
                                                <div class="name">Vaughan, Vernon</div>
                                                <div class="city">City: Jeffersonville</div>
                                                <div class="email">Email: VernonAVaughan@example.com</div>
                                                <div class="bday">Birthday: 1938-4-11</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-l" data-id="217878d90e9b632c231bf62a90580e0a">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Brian Luke</div>
                                                <div class="name">Luke, Brian</div>
                                                <div class="city">City: Beaverton</div>
                                                <div class="email">Email: BrianRLuke@example.com</div>
                                                <div class="bday">Birthday: 1942-9-3</div>
                                            </li>
                                                                                    <li class="button-blue ui-corner-all index-m" data-id="de27a0ad799bbec3e748b49fd4176da9">
                                                <div class="photo"><div></div></div>
                                                <div class="fullname">Faith Minder</div>
                                                <div class="name">Minder, Faith</div>
                                                <div class="city">City: Mansfield</div>
                                                <div class="email">Email: FaithWMinder@example.com</div>
                                                <div class="bday">Birthday: 1931-7-26</div>
                                            </li>
                                                                                </ul>
                                    </section>
                                </div>
                            </div>
                            
                            <div class="grid_6 leading">
                                <div class="grid_2 alpha">
                                    <div id="slider">
                                        <a class="prev"><span class="arrow"></span></a>
                                        <div class="scrollable">
                                            <ul class="items">
                                                <li id="a" class="item"><a name="a" class="title">A</a> 
                                                    <ul> 
                                                        <li><a href="#">Adam</a></li> 
                                                        <li><a href="#">Alex</a></li> 
                                                        <li><a href="#">Ali</a></li> 
                                                        <li><a href="#">Apple</a></li> 
                                                        <li><a href="#">Arthur</a></li> 
                                                        <li><a href="#">Ashley</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="b" class="item"><a name="b" class="title">B</a> 
                                                    <ul> 
                                                        <li><a href="#">Barry</a></li> 
                                                        <li><a href="#">Becky</a></li> 
                                                        <li><a href="#">Biff</a></li> 
                                                        <li><a href="#">Billy</a></li> 
                                                        <li><a href="#">Bozarking</a></li> 
                                                        <li><a href="#">Bryan</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="c" class="item"><a name="c" class="title">c</a> 
                                                    <ul> 
                                                        <li><a href="#">Calista</a></li> 
                                                        <li><a href="#">Cathy</a></li> 
                                                        <li><a href="#">Chris</a></li> 
                                                        <li><a href="#">Cinderella</a></li> 
                                                        <li><a href="#">Corky</a></li> 
                                                        <li><a href="#">Cypher</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="d" class="item"><a name="d" class="title">d</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="e" class="item"><a name="e" class="title">E</a> 
                                                    <ul> 
                                                        <li><a href="#">Barry</a></li> 
                                                        <li><a href="#">Becky</a></li> 
                                                        <li><a href="#">Biff</a></li> 
                                                        <li><a href="#">Billy</a></li> 
                                                        <li><a href="#">Bozarking</a></li> 
                                                        <li><a href="#">Bryan</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="f" class="item"><a name="f" class="title">f</a> 
                                                    <ul> 
                                                        <li><a href="#">Calista</a></li> 
                                                        <li><a href="#">Cathy</a></li> 
                                                        <li><a href="#">Chris</a></li> 
                                                        <li><a href="#">Cinderella</a></li> 
                                                        <li><a href="#">Corky</a></li> 
                                                        <li><a href="#">Cypher</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="g" class="item"><a name="g" class="title">g</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="h" class="item"><a name="h" class="title">h</a> 
                                                    <ul> 
                                                        <li><a href="#">Barry</a></li> 
                                                        <li><a href="#">Becky</a></li> 
                                                        <li><a href="#">Biff</a></li> 
                                                        <li><a href="#">Billy</a></li> 
                                                        <li><a href="#">Bozarking</a></li> 
                                                        <li><a href="#">Bryan</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="i" class="item"><a name="i" class="title">i</a> 
                                                    <ul> 
                                                        <li><a href="#">Calista</a></li> 
                                                        <li><a href="#">Cathy</a></li> 
                                                        <li><a href="#">Chris</a></li> 
                                                        <li><a href="#">Cinderella</a></li> 
                                                        <li><a href="#">Corky</a></li> 
                                                        <li><a href="#">Cypher</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="j" class="item"><a name="j" class="title">j</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="k" class="item"><a name="k" class="title">k</a> 
                                                    <ul> 
                                                        <li><a href="#">Barry</a></li> 
                                                        <li><a href="#">Becky</a></li> 
                                                        <li><a href="#">Biff</a></li> 
                                                        <li><a href="#">Billy</a></li> 
                                                        <li><a href="#">Bozarking</a></li> 
                                                        <li><a href="#">Bryan</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="l" class="item"><a name="l" class="title">l</a> 
                                                    <ul> 
                                                        <li><a href="#">Calista</a></li> 
                                                        <li><a href="#">Cathy</a></li> 
                                                        <li><a href="#">Chris</a></li> 
                                                        <li><a href="#">Cinderella</a></li> 
                                                        <li><a href="#">Corky</a></li> 
                                                        <li><a href="#">Cypher</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="m" class="item"><a name="m" class="title">m</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="n" class="item"><a name="n" class="title">n</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="o" class="item"><a name="o" class="title">o</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="p" class="item"><a name="p" class="title">p</a> 
                                                    <ul> 
                                                        <li><a href="#">Barry</a></li> 
                                                        <li><a href="#">Becky</a></li> 
                                                        <li><a href="#">Biff</a></li> 
                                                        <li><a href="#">Billy</a></li> 
                                                        <li><a href="#">Bozarking</a></li> 
                                                        <li><a href="#">Bryan</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="q" class="item"><a name="q" class="title">q</a> 
                                                    <ul> 
                                                        <li><a href="#">Calista</a></li> 
                                                        <li><a href="#">Cathy</a></li> 
                                                        <li><a href="#">Chris</a></li> 
                                                        <li><a href="#">Cinderella</a></li> 
                                                        <li><a href="#">Corky</a></li> 
                                                        <li><a href="#">Cypher</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="r" class="item"><a name="r" class="title">r</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="s" class="item"><a name="s" class="title">s</a> 
                                                    <ul> 
                                                        <li><a href="#">Barry</a></li> 
                                                        <li><a href="#">Becky</a></li> 
                                                        <li><a href="#">Biff</a></li> 
                                                        <li><a href="#">Billy</a></li> 
                                                        <li><a href="#">Bozarking</a></li> 
                                                        <li><a href="#">Bryan</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="t" class="item"><a name="t" class="title">t</a> 
                                                    <ul> 
                                                        <li><a href="#">Calista</a></li> 
                                                        <li><a href="#">Cathy</a></li> 
                                                        <li><a href="#">Chris</a></li> 
                                                        <li><a href="#">Cinderella</a></li> 
                                                        <li><a href="#">Corky</a></li> 
                                                        <li><a href="#">Cypher</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="u" class="item"><a name="u" class="title">u</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="v" class="item"><a name="v" class="title">v</a> 
                                                    <ul> 
                                                        <li><a href="#">Barry</a></li> 
                                                        <li><a href="#">Becky</a></li> 
                                                        <li><a href="#">Biff</a></li> 
                                                        <li><a href="#">Billy</a></li> 
                                                        <li><a href="#">Bozarking</a></li> 
                                                        <li><a href="#">Bryan</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="w" class="item"><a name="w" class="title">w</a> 
                                                    <ul> 
                                                        <li><a href="#">Calista</a></li> 
                                                        <li><a href="#">Cathy</a></li> 
                                                        <li><a href="#">Chris</a></li> 
                                                        <li><a href="#">Cinderella</a></li> 
                                                        <li><a href="#">Corky</a></li> 
                                                        <li><a href="#">Cypher</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="x" class="item"><a name="x" class="title">x</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="y" class="item"><a name="y" class="title">y</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li id="z" class="item"><a name="z" class="title">z</a> 
                                                    <ul> 
                                                        <li><a href="#">damien</a></li> 
                                                        <li><a href="#">danny</a></li> 
                                                        <li><a href="#">denver</a></li> 
                                                        <li><a href="#">devon</a></li> 
                                                        <li><a href="#">doug</a></li> 
                                                        <li><a href="#">dustin</a></li> 
                                                    </ul> 
                                                </li> 
                                            </ul> 
                                        </div>
                                        <a class="next"><span class="arrow"></span></a>
                                    </div>
                                </div>
                                    <div class="grid_4 omega">
                                    <h3>A Better Apple Style Slider</h3>
                                    Add vertical sliding content using an index navigation bar with smooth scrolling animation. Inspired by the iPhone contacts application, this widget is used mainly for alphabetical contact listings, but other applications are possible.
                                    
                                    <h3 class="leading">Basic Usage</h3>
                                    <h4>HTML</h4>
                                    <pre class="prettyprint linenums lang-html">
&lt;div id=&quot;slider&quot;&gt;
    &lt;a class=&quot;prev&quot;&gt;&lt;span class=&quot;arrow&quot;&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;div class=&quot;scrollable&quot;&gt;
        &lt;ul class=&quot;items&quot;&gt;
            &lt;li id=&quot;a&quot; class=&quot;item&quot;&gt;&lt;a name=&quot;a&quot; class=&quot;title&quot;&gt;A&lt;/a&gt; 
                &lt;ul&gt; 
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Adam&lt;/a&gt;&lt;/li&gt; 
                &lt;/ul&gt; 
            &lt;/li&gt; 
            &lt;li id=&quot;a&quot; class=&quot;item&quot;&gt;&lt;a name=&quot;a&quot; class=&quot;title&quot;&gt;B&lt;/a&gt; 
                &lt;ul&gt; 
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Bryan&lt;/a&gt;&lt;/li&gt; 
                &lt;/ul&gt; 
            &lt;/li&gt; 
        &lt;/ul&gt; 
    &lt;/div&gt;
    &lt;a class=&quot;next&quot;&gt;&lt;span class=&quot;arrow&quot;&gt;&lt;/span&gt;&lt;/a&gt;
&lt;/div&gt;</pre>
                                    <h4>JavaScript</h4>
                                    <pre class="prettyprint linenums lang-js">$('#slider').slidernav();</pre>
                                </div>
                            </div>
 
                        </section>
                    </div>

                </section>

                <!-- Main Section End -->



            </div>

        </section>
            &lt;li id=&quot;a&quot; class=&quot;item&quot;&gt;&lt;a name=&quot;a&quot; class=&quot;title&quot;&gt;A&lt;/a&gt; 
                &lt;ul&gt; 
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Adam&lt;/a&gt;&lt;/li&gt; 
                &lt;/ul&gt; 
            &lt;/li&gt; 
            &lt;li id=&quot;a&quot; class=&quot;item&quot;&gt;&lt;a name=&quot;a&quot; class=&quot;title&quot;&gt;B&lt;/a&gt; 
                &lt;ul&gt; 
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Bryan&lt;/a&gt;&lt;/li&gt; 
                &lt;/ul&gt; 
            &lt;/li&gt; 
        &lt;/ul&gt; 
    &lt;/div&gt;
    &lt;a class=&quot;next&quot;&gt;&lt;span class=&quot;arrow&quot;&gt;&lt;/span&gt;&lt;/a&gt;
&lt;/div&gt;</pre>
                                    <h4>JavaScript</h4>
                                    <pre class="prettyprint linenums lang-js">$('#slider').slidernav();</pre>
                                </div>
                            </div>
 
                        </section>
                    </div>

                </section>

                <!-- Main Section End -->



            </div>

        </section>
            </div>

        
<?php require_once('footer.php'); ?>