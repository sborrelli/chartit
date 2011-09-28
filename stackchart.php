<!-- FRONTIER -->

<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print">
<!--[if lt IE 8]>
    <link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection">
  <![endif]-->
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<link href="css/stylesheets/style.css" rel="stylesheet" type="text/css" />	
<link href="css/stylesheets/li_stylesheet.css" rel="stylesheet" type="text/css" />
<title>Holland & Terrell Stack Chart</title>
<script language="JavaScript"><!--
	function Return () {    
    	history.go(-2);
    }
    // Activate the accordion control
	$(document).ready(function() {
    $("#terrelDiv").accordion({ active: false , collapsible: true, autoHeight: false});
    $("#hollandDiv").accordion({ active: false , collapsible: true, autoHeight: false});
  });
        //--></script>
</head>
<body>
<!-- This is the Common Header and should be placed in your document just after the </TITLE> tag. -->

<script type="text/javascript" src="http://www.wsulibs.wsu.edu/Header/Header1.js"></script>
<script type="text/javascript" src="http://www.wsulibs.wsu.edu/Header/Header2.js"></script>

<!-- END HEADER --> 


<h3 align="center">WSU Library Instruction</h3>
<h2 align="center">Holland & Terrell Stack Chart</h2>

<hr />

<!-- FRONTIER -->

<div class="container showgrid">
<!--	
<table width="100%" cellpadding="0" cellspacing="0"><tr>
<td width="200" bgcolor=#990033 style="text-align: center;"><input type=Button NAME='StackChartTutorial' Value='Stack chart tutorial' onclick="window.open('http://www.wsulibs.wsu.edu/usered/viewlets/stack_chart.html');" /></td>

<td width="200" bgcolor=#990033 style="text-align: center;"><input type=Button NAME='BrowsebyLC' Value='Browse by LC Classification' onclick="window.open('http://www.wsulibs.wsu.edu/usered/tutorials/hatmapsstacks/');" /></td>

<td width="200" bgcolor=#990033 style="text-align: center;"><input type=Button NAME='HTLMap' Value='Holland Terrell Library Map' onclick="window.open('http://libguides.wsulibs.wsu.edu/data/files3/89253/FLOOR%20MAP.doc');" /></td>
</tr></table>
-->
<?
if(!($db=sqlite_open('db/stackchart.sqlite', '0666')))
	{
		echo "<h2> Database Error </h2>";
		die();
	}
?>
<div id="mainDiv" >
	
	
	<div class="span-9" >
		<h1 align="center" class="" >Terrell Library </h1>
		<div id="terrelDiv">
			<h3><a href="#">Holland &amp; Terrell Call Number Map</a></h3>
			<div>
				<div align="center">
					<table border="1" cellpadding=2 cellspacing="0">
						<tbody class="call_map">					  
					  <tr>
						<td width="267">A - DC </td>
						<td width="145">Terrel 1st</td>
					  </tr>
					  <tr>
						<td>DD - HB 149 Z9 </td>
						<td>Terrel Ground</td>
					  </tr>
					  <tr>
						<td>HB 150- HV 5999 </td>
						<td>Terrel Basement</td>
					  </tr>
					  <!-- 
					  <tr valign="top">
						<td>001-999 (DEWEY) </td>
						<td>Basement, Compact Storage </td>
					  </tr>
					  -->
					  <tr>
						<td width="280">HV 6000 - KZZ</td>
						<td width="143">Holland First</td>
					  </tr>
					  <tr>
						<td>L - PS 3299 </td>
						<td>Holland Second</td>
					  </tr>
					  <tr>
						<td>PS 3300 - Z</td>
						<td>Holland Third</td>
					  </tr>
					  <tr>
						<td>Jackson Docs </td>
						<td>Holland Third</td>
					  </tr>
					  <tr>
						<td>US Docs A - Y </td>
						<td>Holland Third</td>
					  </tr>
					  <!--
					  <tr>
						<td>Oversize</td>
						<td>3rd Floor </td>
					  </tr>
					  -->
					  </tbody>
					</table>
	    		</div>		    
			</div>
			<h3><a href="#" id="terrell_1st_hd">1st Floor<br>Call Numbers: A - DC</a></h3>
			<div>
				<table border="1" cellspacing="0" cellpadding="2" class="">
					<tbody id="terrell_1st">
					    <tr>
		                  <td width="68"><b>Stack #</b></td>
		                  <td width="152"><b>Begins with:</b></td>
		                  <td width="20">&nbsp;</td>
		                  <td width="149"><b>Ends with:</b> </td>
				        </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A101.html"><strong>101</strong></a></div></td>
		                  <td>A 1 A1</td>
		                  <td width="20">to</td>
		                  <td>AE 25 D9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A102-103.html"><strong>102</strong></a></div></td>
		                  <td>AE 25 E1</td>
		                  <td width="20">to
		                  </td>
		                  <td>AI 3 R48 v.42</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A103.html"><strong>103</strong></a></div></td>
		                  <td>AI 3 R48 v.43</td>
		                  <td width="20">to
		                  </td>
		                  <td>AP 1 S9 v.69</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A103-114.html"><strong>104</strong></a></div></td>
		                  <td>AP 1 S9 v.70</td>
		                  <td width="20">to
		                  </td>
		                  <td>AP 2 E8451</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A103-114.html"><strong>105</strong></a></div></td>
		                  <td>AP 2 E8452</td>
		                  <td width="20">to
		                  </td>
		                  <td>AP 2 L9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A103-114.html"><strong>106</strong></a></div></td>
		                  <td>AP 2 M1</td>
		                  <td width="20">to
		                  </td>
		                  <td>AP 2 N66 v.29</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A103-114.html"><strong>107</strong></a></div></td>
		                  <td>AP 2 N66 v30</td>
		                  <td width="20">to
		                  </td>
		                  <td>AP 2 R255 v.8 pt.1</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A103-114.html"><strong>108</strong></a></div></td>
		                  <td>AP 2 R255 v.8 pt.2</td>
		                  <td width="20">to
		                  </td>
		                  <td>AP 2 S5 v.84</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A103-114.html"><strong>109</strong></a></div></td>
		                  <td>AP 2 S5 v.85</td>
		                  <td width="20">to
		                  </td>
		                  <td>AP 2 U735 v.46</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A103-114.html"><strong>110</strong></a></div></td>
		                  <td>AP 2 U735 v.47</td>
		                  <td width="20">to
		                  </td>
		                  <td>AP 4 N16 v.19</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A103-114.html"><strong>111</strong></a></div></td>
		                  <td>AP 4 n16 v.20</td>
		                  <td width="20">to
		                  </td>
		                  <td>AP 8 I25 v.99</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A103-114.html"><strong>112</strong></a></div></td>
		                  <td>AP 8 I25 v.100</td>
		                  <td width="20">to
		                  </td>
		                  <td>AP 30 A71</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A103-114.html"><strong>113</strong></a></div></td>
		                  <td>AP 30 A72</td>
		                  <td width="20">to
		                  </td>
		                  <td>AP 60 P9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A114-116.html"><strong>114</strong></a></div></td>
		                  <td>AP 60 Q1</td>
		                  <td width="20">to
		                  </td>
		                  <td>AS 8 E5 28th</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A114-116.html"><strong>115</strong></a></div></td>
		                  <td>AS 8 E5 29th</td>
		                  <td width="20">to
		                  </td>
		                  <td>AS 162 P27</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/A116.html"><strong>116</strong></a></div></td>
		                  <td>AS 162 P28</td>
		                  <td width="20">to
		                  </td>
		                  <td>B 1 A79</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B116-122.html"><strong>117</strong></a></div></td>
		                  <td>B 1 A8</td>
		                  <td width="20">to
		                  </td>
		                  <td>B 2 D53x v.16</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B116-122.html"><strong>118</strong></a></div></td>
		                  <td>B 2 D53x v.17</td>
		                  <td width="20">to	
		                  </td>
		                  <td>B 133 G5 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B116-122.html"><strong>119</strong></a></div></td>
		                  <td>B 133 G51</td>
		                  <td width="20">to
		                  </td>
		                  <td>B 831.5 H9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B116-122.html"><strong>120</strong></a></div></td>
		                  <td>B 831.5 I1</td>
		                  <td width="20">to
		                  </td>
		                  <td>B 1893 R33 B9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B116-122.html"><strong>121</strong></a></div></td>
		                  <td>B 1893 R33 C1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>B 3316 A25 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B122.html"><strong>122</strong></a></div></td>
		                  <td>B 3316 A26</td>
		                  <td width="20">to
		                  </td>
		                  <td>BD 438 Q9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B122-123.html"><strong>123</strong></a></div></td>
		                  <td>BD 438 R1</td>
		                  <td width="20">to
		                  </td>
		                  <td>BF 1 P79 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B123-129.html"><strong>124</strong></a></div></td>
		                  <td>BF 1 P8 </td>
		                  <td width="20">to
		                  </td>
		                  <td>BF 173 A2 M9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B123-129.html"><strong>125</strong></a></div></td>
		                  <td>BF 173 A2 N1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>BF 371 P69 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B123-129.html"><strong>126</strong></a></div></td>
		                  <td>BF 371 P7 </td>
		                  <td width="20">to
		                  </td>
		                  <td>BF 637 G9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B123-129.html"><strong>127</strong></a></div></td>
		                  <td>BF 637 H1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>BF 721 P79 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><strong><a href="../../Usered/tutorials/hatmapsstacks/B123-129.html">128</a></strong></div></td>
		                  <td>BF 721 P8 </td>
		                  <td width="20">to
		                  </td>
		                  <td>BF 1589 L9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B129.html"><strong>129</strong></a></div></td>
		                  <td>BF 1589 M1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>BL 1 H5 v.30 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B129-132.html"><strong>130</strong></a></div></td>
		                  <td>BL 1 H5 v.31 </td>
		                  <td width="20">to
		                  </td>
		                  <td>BL 625 E39 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B129-132.html"><strong>131</strong></a></div></td>
		                  <td>BL 625 E4 </td>
		                  <td width="20">to
		                  </td>
		                  <td>BL 2001.2 F9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B132.html"><strong>132</strong></a></div></td>
		                  <td>BL 2001.2 G1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>BP 163 S35 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B133.html"><strong>133</strong></a></div></td>
		                  <td>BP 163 S35 </td>
		                  <td width="20">to
		                  </td>
		                  <td>BR 53 M49 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B133-135.html"><strong>134</strong></a></div></td>
		                  <td>BR 53 M5 </td>
		                  <td width="20">to
		                  </td>
		                  <td>BR 754 U9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B135-136.html"><strong>135</strong></a></div></td>
		                  <td>BR 754 W1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>BS 2555.5 R9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B136.html"><strong>136</strong></a></div></td>
		                  <td>BS 2555.5 S1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>BV 4208 I79 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B137-139.html"><strong>137</strong></a></div></td>
		                  <td>BV 4208 I8</td>
		                  <td width="20">to
		                  </td>
		                  <td>BX 2618 Z9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/B137-139.html"><strong>138</strong></a></div></td>
		                  <td>BX 2619 A1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>BX 8635.1 Z9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/C139-140.html"><strong>139</strong></a></div></td>
		                  <td>BX 8635.2 A1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>CB 425 J9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/C140.html"><strong>140</strong></a></div></td>
		                  <td>CB 425 K1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>CS 42 L9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/C141.html"><strong>141</strong></a></div></td>
		                  <td>CS 42 M1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>D1 D5 1985 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D141-142.html"><strong>142</strong></a></div></td>
		                  <td>D1 D5 1986 </td>
		                  <td width="20">to
		                  </td>
		                  <td>D 16.2 H49 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D142-148.html"><strong>143</strong></a></div></td>
		                  <td>D 16.2 H5 </td>
		                  <td width="20">to
		                  </td>
		                  <td>D 202 F9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D142-148.html"><strong>144</strong></a></div></td>
		                  <td>D 202 H1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>D 445 H49 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D142-148.html"><strong>145</strong></a></div></td>
		                  <td>D 445 H5 </td>
		                  <td width="20">to
		                  </td>
		                  <td>D764 H59 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D142-148.html"><strong>146</strong></a></div></td>
		                  <td>D764 H6 </td>
		                  <td width="20">to
		                  </td>
		                  <td>D 810 S7 B649 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D142-148.html"><strong>147</strong></a></div></td>
		                  <td>D 810 S7 B65 </td>
		                  <td width="20">to
		                  </td>
		                  <td>D 839.3 C6 no. 289 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D148-152.html"><strong>148</strong></a></div></td>
		                  <td>D839.3 C6 no. 290 </td>
		                  <td width="20">to
		                  </td>
		                  <td>DA 28 P49 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D148-152.html"><strong>149</strong></a></div></td>
		                  <td>DA 28 P5 </td>
		                  <td width="20">to
		                  </td>
		                  <td>DA 255 Z9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D148-152.html"><strong>150</strong></a></div></td>
		                  <td>DA 256 A1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>DA 535 R9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D148-152.html"><strong>151</strong></a></div></td>
		                  <td>DA 535 S1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>DA 670 H2 V6 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D152-153.html"><strong>152</strong></a></div></td>
		                  <td>DA 670 H2 V6 </td>
		                  <td width="20">to
		                  </td>
		                  <td>DB 80 M31 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D152-153.html"><strong>153</strong></a></div></td>
		                  <td>DB 80 M32 </td>
		                  <td width="20">to
		                  </td>
		                  <td>DC 103 P9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D153-155.html"><strong>154</strong></a></div></td>
		                  <td>DC 103 Q1 </td>
		                  <td width="20">to</td>
		                  <td>DC 316 P9 </td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D153-155.html"><strong>155</strong></a></div></td>
		                  <td>DC 316 Q1 </td>
		                  <td width="20">to
		                  </td>
		                  <td>DC 9999 Z9 </td>
		                </tr>
		                </tbody>
		              </table>
			</div>
			<h3><a href="#" id="terrell_gnd_hd">Ground Floor<br>Call Numbers: DD - HB 149 Z9</a></h3>	
			<div>
				<table border="1" cellspacing="0" cellpadding="2">
					<tbody id="terrell_gnd">
		                <tr>
		                  <td width="66"><b>Stack #</b></td>
						  <td width="138"><b>Begins with:</b></td>
		                  <td width="20">&nbsp; </td>
		                  <td width="128"><b>Ends with:</b></td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D201-203.html"><strong>201</strong></a></div></td>
		                  <td>DD	1	A1<br /></td>
		                  <td width="20">to
		                  </td>
		                  <td>DD	247	H4</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D201-203.html"><strong>202</strong></a></div></td>
		                  <td>DD	247	H41</td>
		                  <td width="20">to
		                  </td>
		                  <td>DD 261 G2</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D201-203.html"><strong>203</strong></a></div></td>
		                  <td>DD 261 G3</td>
		                  <td width="20">to
		                  </td>
		                  <td>DD 999 Z9</td>
		                </tr>
		                <tr>
		                  <td><div align="center">204</div></td>
		                  <td>EMPTY</td>
		                  <td width="20">to
		                  </td>
		                  <td>EMPTY </td>
		                </tr>
		                <tr>
		                  <td><div align="center">205</div></td>
		                  <td>EMPTY</td>
		                  <td width="20">to
		                  </td>
		                  <td>EMPTY</td>
		                </tr>
		                <tr>
		                  <td><div align="center">206</div></td>
		                  <td>EMPTY</td>
		                  <td width="20">to
		                  </td>
		                  <td>EMPTY</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D207.html"><strong>207</strong></a></div></td>
		                  <td>DE 1 A1</td>
		                  <td width="20">to
		                  </td>
		                  <td>DG 67 Z9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D208.html"><strong>208</strong></a></div></td>
		                  <td>DG 68 A1</td>
		                  <td width="20">to
		                  </td>
		                  <td>DK 1 I8 v.44</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D208-211.html"><strong>209</strong></a></div></td>
		                  <td>DK 1 I8 v.45</td>
		                  <td width="20">to
		                  </td>
		                  <td>DK 171.9 Z9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D208-211.html"><strong>210</strong></a></div></td>
		                  <td>DK 172 A1</td>
		                  <td width="20">to
		                  </td>
		                  <td>DK 288 L36</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D211-212.html"><strong>211</strong></a></div></td>
		                  <td>DK 288 L37</td>
		                  <td width="20">to
		                  </td>
		                  <td>DL 
		 Z9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D212-213.html"><strong>212</strong></a></div></td>
		                  <td>DL 501 A1</td>
		                  <td width="20">to
		                  </td>
		                  <td>DR 259 Z9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D213-223.html"><strong>213</strong></a></div></td>
		                  <td>DR 260 A1</td>
		                  <td width="20">to
		                  </td>
		                  <td>DS 35.69 Z9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D213-223.html"><strong>214</strong></a></div></td>
		                  <td>DS 35.7 A1</td>
		                  <td width="20">to
		                  </td>
		                  <td>DS 79.9 G9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D213-223.html"><strong>215</strong></a></div></td>
		                  <td>DS 79.9 H1</td>
		                  <td width="20">to
		                  </td>
		                  <td>DS 133 Z9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D213-223.html"><strong>216</strong></a></div></td>
		                  <td>DS 134 A1</td>
		                  <td width="20">to
		                  </td>
		                  <td>DS 329 Z9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D213-223.html"><strong>217</strong></a></div></td>
		                  <td>DS 329.1 A1</td>
		                  <td width="20">to
		                  </td>
		                  <td>DS 478 G9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D213-223.html"><strong>218</strong></a></div></td>
		                  <td>DS 478 H1</td>
		                  <td width="20">to
		                  </td>
		                  <td>DS 502 Z9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D213-223.html"><strong>219</strong></a></div></td>
		                  <td>DS 503 A1</td>
		                  <td width="20">to
		                  </td>
		                  <td>DS 646.3 H9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D213-223.html"><strong>220</strong></a></div></td>
		                  <td>DS 646.3 I1</td>
		                  <td width="20">to
		                  </td>
		                  <td>DS 755 S47</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D213-223.html"><strong>221</strong></a></div></td>
		                  <td>DS 755 S48</td>
		                  <td width="20">to
		                  </td>
		                  <td>DS 796 S257 F79</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D213-223.html"><strong>222</strong></a></div></td>
		                  <td>DS 796 S257 F8</td>
		                  <td width="20">to
		                  </td>
		                  <td>DS 901 K679</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D223-226.html"><strong>223</strong></a></div></td>
		                  <td>DS 901 K68</td>
		                  <td width="20">to
		                  </td>
		                  <td>DT 61 U59</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D223-226.html"><strong>224</strong></a></div></td>
		                  <td>DT 61 U6</td>
		                  <td width="20">to
		                  </td>
		                  <td>DT 510 G9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D223-226.html"><strong>225</strong></a></div></td>
		                  <td>DT 510 H1</td>
		                  <td width="20">to
		                  </td>
		                  <td>DT 930 A29</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D226-227.html"><strong>226</strong></a></div></td>
		                  <td>DT 930 A3</td>
		                  <td width="20">to
		                  </td>
		                  <td>DU 401 Z9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/D227.html"><strong>227</strong></a></div></td>
		                  <td>DU 402 A1</td>
		                  <td width="20">to
		                  </td>
		                  <td>E 65 K9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/E227-242.html"><strong>228</strong></a></div></td>
		                  <td>E 65 L1</td>
		                  <td width="20">to
		                  </td>
		                  <td>E 78 S65 H8</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/E227-242.html"><strong>229</strong></a></div></td>
		                  <td>E 78 S65 H81</td>
		                  <td width="20">to
		                  </td>
		                  <td>E 99 C13 B9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/E227-242.html"><strong>230</strong></a></div></td>
		                  <td>E 99 C13 C1</td>
		                  <td width="20">to
		                  </td>
		                  <td>E 101 C9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/E227-242.html"><strong>231</strong></a></div></td>
		                  <td>E 101 D1</td>
		                  <td width="20">to
		                  </td>
		                  <td>E 171 A43 v.22</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/E227-242.html"><strong>232</strong></a></div></td>
		                  <td>E 171 A43 v.23</td>
		                  <td width="20">to
		                  </td>
		                  <td>E 178 B3 v.2</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/E227-242.html"><strong>233</strong></a></div></td>
		                  <td>E 178 B3 v.3</td>
		                  <td width="20">to
		                  </td>
		                  <td>E 183.8 S65 B9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/E227-242.html"><strong>234</strong></a></div></td>
		                  <td>E 183.8 S65 C1</td>
		                  <td width="20">to
		                  </td>
		                  <td>E 185 A9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/E227-242.html"><strong>235</strong></a></div></td>
		                  <td>E 185 B1</td>
		                  <td width="20">to
		                  </td>
		                  <td>E 185.96 V9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/E227-242.html"><strong>236</strong></a></div></td>
		                  <td>E 185.96 W1</td>
		                  <td width="20">to
		                  </td>
		                  <td>E 302.6 C3 G9</td>
		                </tr>
		                <tr>
		                  <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/E227-242.html"><strong>237</strong></a></div></td>
		                  <td>E 302.6 C3 H1</td>
		                  <td width="20">to
		                  </td>
		                  <td>E 427 Z9</td>
		                </tr>
						<tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/E227-242.html"><strong>238</strong></a></div></td>
		                    <td width="114">
		                      E 428 A1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      E 475.97 B9</td>
		                  </tr>
		                  <tr>
		                    <td width="60" height="26">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/E227-242.html"><strong>239</strong></a></div></td>
		                    <td width="114">
		                      E 475.97 C1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      E 743 D334</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/E227-242.html"><strong>240</strong></a></div></td>
		                    <td width="114">
		                      E 743 D345</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      E 785 V58</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/E227-242.html"><strong>241</strong></a></div></td>
		                    <td width="114">
		                      E 785 V58 1984</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      E 840.8 P39</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/F242-254.html"><strong>242</strong></a></div></td>
		                    <td width="114">
		                      E 840.8 P4</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      F 46 V55 v.60</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/F242-254.html"><strong>243</strong></a></div></td>
		                    <td width="114">
		                      F 46 V55 v.61</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      F 206 J68 v.50</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/F242-254.html"><strong>244</strong></a></div></td>
		                    <td width="114">
		                      F 206 J68 v.51</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      F 379 N59</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/F242-254.html"><strong>245</strong></a></div></td>
		                    <td width="114">
		                      F 379 N6</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      F 591 S649</td>
		                  </tr>
		              <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/F242-254.html"><strong>246</strong></a></div></td>
		                    <td width="114">
		                      F 591 S65</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      F 741 I 19</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/F242-254.html"><strong>247</strong></a></div></td>
		                    <td width="114">
		                      F 741 I 2</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      F 851 P18 v.49</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/F242-254.html"><strong>248</strong></a></div></td>
		                    <td width="114">
		                      F 851 P18 v.50</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      F 886 R9</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/F242-254.html"><strong>249</strong></a></div></td>
		                    <td width="114">
		                      F 886 S1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      F 1015 B66</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/F242-254.html"><strong>250</strong></a></div></td>
		                    <td width="114">
		                      F 1015 B67</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      F 1201 U9</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/F242-254.html"><strong>251</strong></a></div></td>
		                    <td width="114">
		                      F 1201V1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      F 1401 L24</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/F242-254.html"><strong>252</strong></a></div></td>
		                    <td width="114">
		                      F 1401 L25</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      F 1519 Z9</td>
		                  </tr>
		                  
						  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/F242-254.html"><strong>253</strong></a></div></td>
		                    <td width="114">
		                      F 1520 A1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      F 2520.1 X9</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/G254-257.html"><strong>254</strong></a></div></td>
		                    <td width="114">
		                      F 2520.1 Y1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      G 1 C36x v.37</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/G254-257.html"><strong>255</strong></a></div></td>
		                    <td width="114">
		                      G1 C36x v.38</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      G 149 T74</td>
		                  </tr>
		               
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/G254-257.html"><strong>256</strong></a></div></td>
		                    <td width="114">
		                      G 149 T75</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      G1999 Z9</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/G257.html"><strong>257</strong></a></div></td>
		                    <td width="114">
		                      G 1200 A1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      GN 1 A48 New Ser v.104 no.1-2</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/G257-261.html"><strong>258</strong></a></div></td>
		                    <td width="114">
		                      GN 1 A48 New Ser v.104 no.3-4</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      GN 2 O9</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/G257-261.html"><strong>259</strong></a></div></td>
		                    <td width="114">
		                      GN 2 P1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      GN 346.2 Z9</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/G257-261.html"><strong>260</strong></a></div></td>
		                    <td width="114">
		                      GN 346.3 A1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      GN 671 N5 A93</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/G261-262.html"><strong>261</strong></a></div></td>
		                    <td width="114">
		                      GN 671 N5 A94</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      GR 110 P4 R9</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/G261-262.html"><strong>262</strong></a></div></td>
		                    <td width="114">
		                      GR 110 P4 S1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      GV 1 P3 v.20</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/G262-267.html"><strong>263</strong></a></div></td>
		                    <td width="114">
		                      GV 1 P3 v.21</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      GV 350 R29</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/G262-267.html"><strong>264</strong></a></div></td>
		                    <td width="114">
		                      GV 350 R3</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      GV 706.4 J68 v.22</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/G262-267.html"><strong>265</strong></a></div></td>
		                    <td width="114">                      
							GV 706.4 J68 v.23</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      GV 875 C6 E9</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/G262-267.html"><strong>266</strong></a></div></td>
		                    <td width="114">
		                      GV 875 C6 F1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      GV 1313 C71 v.54</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/G262-267.html"><strong>267</strong></a></div></td>
		                    <td width="114">
		                      GV 1313 C71 v.55</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      H 1 F8 v.32</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H267-271.html"><strong>268</strong></a></div></td>
		                    <td width="114">
							H1 F8 v.33 </td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      H 1 P8 v.28</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H267-271.html"><strong>269</strong></a></div></td>
		                    <td width="114">
		                      H 1 P8 v.29</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      H 31 C514 no.208</td>
		                  </tr>
		                  <tr>
		                    <td width="60">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H267-271.html"><strong>270</strong></a></div></td>
		                    <td width="114">
		                      H 31 C514 no.209</td>
		                    <td width="20">to
		                    </td>
		                    <td width="138">
		                      <p>H 62 P 49</p>
		                    </td>
		                  </tr>
		                  <tr>
		                    <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H267-271.html"><strong>271</strong></a></div></td>
		                    <td>H 62 P5</td>
		                    <td>to</td>
		                    <td>HA 29 N59</td>
		                  </tr>
		                  <tr>
		                    <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H272-275.html"><strong>272</strong></a> </div></td>
		                    <td>HA 29 N6</td>
		                    <td>to</td>
		                    <td>HB 1 C65x v.14</td>
		                  </tr>
		                  <tr>
		                    <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H272-275.html"><strong>273</strong></a></div></td>
		                    <td>HB 1 C65x v.15</td>
		                    <td>to</td>
		                    <td>HB 1 S3 v.26</td>
		                  </tr>
		                  <tr>
		                    <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H272-275.html"><strong>274</strong></a></div></td>
		                    <td>HB 1 S3 v.27</td>
		                    <td>to</td>
		                    <td>HB 75 G7</td>
		                  </tr>
		                  <tr>
		                    <td><div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H272-275.html"><strong>275</strong></a></div></td>
		                    <td>HB 75 G7</td>
		                    <td>to</td>
		                    <td>HB 149 Z9</td>
		                  </tr>
		                  </tbody>
					  </table>	
			</div>		
			<h3><a href="#" id="terrell_bas_hd">Basement<br>Call Numbers: HB 150 - HV 5999</a></h3>
			<div>
				<table border="1" cellspacing="0" cellpadding="2">
					<tbody id="terrell_bas">
		                  <tr>
		                    <td width="72">
		                    <b>Stack #</b></td>
		                    <td width="138">
		                      <b>Begins with:</b></td>
		                    <td width="20">&nbsp; </td>
		                    <td width="140">
		                      <b>Ends with:</b></td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H272-275.html"><strong>301</strong></a></div></td>
		                    <td width="138">
		                      HB 150 A1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HB 849.415 P66</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H302-311.html"><strong>302</strong></a></div></td>
		                    <td width="138">
		                      HB 849.415 P67</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HC 10 J64 v.62 no.1-2</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H302-311.html"><strong>303</strong></a></div></td>
		                    <td width="138">
		                      HC 10 J64 v.62 no.3-4</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HC 59.7 T453x</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H302-311.html"><strong>304</strong></a></div></td>
		                    <td width="138">
		                      HC 59.7 T453x</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HC 101 B9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H302-311.html"><strong>305</strong></a></div></td>
		                    <td width="138">
		                      HC 101 C1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HC 107 A12 A9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H302-311.html"><strong>306</strong></a></div></td>
		                    <td width="138">
		                      HC 107 A12 B1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HC 117 M3 L9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H302-311.html"><strong>307</strong></a></div></td>
		                    <td width="138">
		                      HC 117 M3 M1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HC 244 M29</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H302-311.html"><strong>308</strong></a></div></td>
		                    <td width="138">
		                      HC 244 M3</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HC 336.27 P665</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H302-311.html"><strong>309</strong></a></div></td>
		                    <td width="138">
		                      HC 336.27 P666</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HC 431 I43 v.49</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H302-311.html"><strong>310</strong></a></div></td>
		                    <td width="138">
		                      HC 431 I43 v.50</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HC 659 Z9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>311</strong></a></div></td>
		                    <td width="138">
		                      HC 660 A1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 30.28 A38</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>312</strong></a></div></td>
		                    <td width="138">
		                      HD 30.28 A381</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 58.7 M49</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>313</strong></a></div></td>
		                    <td width="138">
		                      HD 58.7 M5</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 82 D387</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                    <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>314</strong></a></div></td>
		                    <td width="138">
		                      HD 82 D 388</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 1401 A5 v.33</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>315</strong></a></div>
		                    </td>
		                    <td>HD 1401 A5 v.34</td>
		                    <td>to</td>
		                    <td>HD 2346 U5 A76</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>316</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HD 2346 U5 A76</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 2777 C58 1962</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>317</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HD 2777 C58 1963</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 4826 I63</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>318</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HD 4826 I 63</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 5725 W31 K55x 1985</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>319</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HD 5725 W31 K55x 1985 c.2</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 6515 L8 H9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>320</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HD 6515 L8 I1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 7801 O345</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>321</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HD 7801 O346</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 8389 D9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>322</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HD 8389 E1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 9198 G9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>323</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HD 9198 H1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 9512 Z9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>324</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HD 9513 A1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 9665.1 R9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>325</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HD 9665.1 S1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 9715 A2 B9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H311-327.html"><strong>326</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HD 9715 A2 C1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HD 9899 Z9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H327-330.html"><strong>327</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HD 9900 A1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HE 191.9 Z9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H327-330.html"><strong>328</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HE 192 A1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HE 1061 R9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H327-330.html"><strong>329</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HE 1061 S1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HE 6187 P36 v.26</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H330-339.html"><strong>330</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HE 6187 P36 v.27</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HF 1 N4 v.75</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H330-339.html"><strong>331</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HF 1 N4 v.76</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HF 1414 N9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H330-339.html"><strong>332</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HF 1414 O1 </td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HF 3831 C47 1986</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H330-339.html"><strong>333</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HF 3831 C47 1987</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HF 5001 J59</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H330-339.html"><strong>334</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HF 5001 J6</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HF 5415 D69</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H330-339.html"><strong>335</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HF 5415 D7</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HF 5465 U5 N28 47th</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H330-339.html"><strong>336</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HF 5465 U5 N28 48th</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HF 5549.5 I5 M392</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H330-339.html"><strong>337</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HF 5549.5 I5 M393</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HF 5630 I9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H330-339.html"><strong>338</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HF 5630 J1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HF 5801 J59 v.19</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H339-345.html"><strong>339</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HF 5801 J59 v.20</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HG 11 E2 v.199</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H339-345.html"><strong>340</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HG 11 E2 v.200</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HG 1501 B187 v.144 no.1-6</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H339-345.html"><strong>341</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HG 1501 B187 v.144 no.7-12</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HG 3881 I 575129</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H339-345.html"><strong>342</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HG 2881 I 57513</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HG 4501 F5 v.158</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H339-345.html"><strong>343</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HG 4501 F5 v.159</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HG 4931 M58 1980 v.1</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H339-345.html"><strong>344</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HG 4931 M58 1980 v.2</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HG 8751 N3 v.108</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H345-346.html"><strong>345</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HG 8751 N3 v.109</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HJ 2322 A3 E9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H345-346.html"><strong>346</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HJ 2322 A3 F1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HM 1 G9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H346-350.html"><strong>347</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HM 1 H1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HM 48 C69</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H346-350.html"><strong>348</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HM 48 C7</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HM 251 A757 v.6</td>
		                  </tr>
		                     <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H346-350.html"><strong>349</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HM 251 A757 v.7</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HM 646 M9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H350-352.html"><strong>350</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HM 646 N1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HN 57 J2459</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H350-352.html"><strong>351</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HN 57 J246</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HN 398 S9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H352-358.html"><strong>352</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HN 398 T1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HQ 21 P57</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H352-358.html"><strong>353</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HQ 21 P58</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HQ 750 A1 C45 v.65</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H352-358.html"><strong>354</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HQ 750 A1 C45 v.66</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HQ 769 S64</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H352-358.html"><strong>355</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HQ 769 S65</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HQ 796 J625 v.17</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H352-358.html"><strong>356</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HQ 796 J625 v.18</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HQ 1106 1971</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H352-358.html"><strong>357</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HQ 1106 1972</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HQ  1593 T9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H358-361.html"><strong>358</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HQ 1593 U1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                     HT 101 I57 v.18</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H358-361.html"><strong>359</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HT 101 I57 v.19</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                     HT 241 R9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H358-361.html"><strong>360</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HT 241 S1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HT 1581 A59</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H403-407.html"><strong>361</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HT 1581 A6</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                     HV 244 O25 no.42</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H403-407.html"><strong>362</strong></a></div>
		                    </td>
		                    <td width="138">
		                     HV 244 O25 no.43</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HV 889 Z9</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H403-407.html"><strong>363</strong></a></div>
		                    </td>
		                    <td width="138">
		                      HV 890 A1</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HV 5060 R69</td>
		                  </tr>
		                  <tr>
		                    <td width="72">
		                      <div align="center"><a href="../../Usered/tutorials/hatmapsstacks/H403-407.html"><strong>364</strong></a></div>
		                    </td>
		                    <td width="138">
		                     HV 5060 R7</td>
		                    <td width="20">to
		                    </td>
		                    <td width="140">
		                      HV 5999 Z9</td>
		                  </tr>
		              </tbody>    
		          </table>
			</div>
			<h3><a href="#" id="terrell_bas_hd">Basement<br>Dewey Call Numbers: 001-999</a></h3>
			<div>
			<table border="1" cellspacing="0" cellpadding="2">
	            <tr>
	              <td><b>Stack#</b></td>
	              <td><b>Begins with:</b></td>
	              <td width="20">&nbsp; </td>
	              <td width="130"><b>Ends with:</b></td>
	            </tr>
	            <tr>
	              <td width="61">
	                <div align="center">1</div></td>
	              <td width="132">000</td>
	              <td width="20">to</td>
	              <td width="130">011 B471</td>
	            </tr>
	            <tr>
	              <td><div align="center">2</div></td>
	              <td>011 B471  Bd. 9-10</td>
	              <td width="20">to
	              </td>
	              <td>029.6 H529s</td>
	            </tr>
	            <tr>
	              <td><div align="center">3</div></td>
	              <td>029.6 H72b</td>
	              <td width="20">to
	              </td>
	              <td>133.3T139t</td>
	            </tr>
	            <tr>
	              <td><div align="center">4</div></td>
	              <td>133.323 C981</td>
	              <td width="20">to
	              </td>
	              <td>157 R396p</td>
	            </tr>
	            <tr>
	              <td><div align="center">5</div></td>
	              <td>157 R829p</td>
	              <td width="20">to
	              </td>
	              <td>193 R135uzC</td>
	            </tr>
	            <tr>
	              <td><div align="center">6</div></td>
	              <td>193 K135zC2 v.1</td>
	              <td width="20">to
	              </td>
	              <td>220.7Ex762 v.17</td>
	            </tr>
	            <tr>
	              <td><div align="center">7</div></td>
	              <td>220.7Ex762 v.18</td>
	              <td width="20">to
	              </td>
	              <td>270.6 M546hwm v.3</td>
	            </tr>
	            <tr>
	              <td><div align="center">8</div></td>
	              <td>270.6 M546hwm v.4</td>
	              <td width="20">to
	              </td>
	              <td>282.05Ec28 v.74</td>
	            </tr>
	            <tr>
	              <td><div align="center">9</div></td>
	              <td>282.05Ec28</td>
	              <td width="20">to
	              </td>
	              <td>293 R64</td>
	            </tr>
	            <tr>
	              <td><div align="center">10</div></td>
	              <td>293 R97</td>
	              <td width="20">to
	              </td>
	              <td>301.422 F927p</td>
	            </tr>
	            <tr>
	              <td><div align="center">11</div></td>
	              <td>301.422 H726w</td>
	              <td width="20">to
	              </td>
	              <td>311.2 W585s</td>
	            </tr>
	            <tr>
	              <td><div align="center">12</div></td>
	              <td>311.w W899t</td>
	              <td width="20">to
	              </td>
	              <td>322 Ac72f</td>
	            </tr>
	            <tr>
	              <td><div align="center">13</div></td>
	              <td>322 B618f</td>
	              <td width="20">to
	              </td>
	              <td>327.73SU64u</td>
	            </tr>
	            <tr>
	              <td><div align="center">14</div></td>
	              <td>327.73 Su79</td>
	              <td width="20">to
	              </td>
	              <td>330.904 Ed57d</td>
	            </tr>
	            <tr>
	              <td><div align="center">15</div></td>
	              <td>330.902 Ez32+</td>
	              <td width="20">to
	              </td>
	              <td>331.137 W2799m</td>
	            </tr>
	            <tr>
	              <td><div align="center">16</div></td>
	              <td>331.137 W673h</td>
	              <td width="20">to
	              </td>
	              <td>332.4 L47m v.6</td>
	            </tr>
	            <tr>
	              <td><div align="center">17</div></td>
	              <td>332.4 L47m v.7</td>
	              <td width="20">to
	              </td>
	              <td>336.747 Na2s no.13-14</td>
	            </tr>
	            <tr>
	              <td><div align="center">18</div></td>
	              <td>336.747 N42a</td>
	              <td width="20">to
	              </td>
	              <td>338.54 H198bu</td>
	            </tr>
	            <tr>
	              <td><div align="center">19</div></td>
	              <td>338.54 H198r</td>
	              <td width="20">to
	              </td>
	              <td>341 M584e</td>
	            </tr>
	            <tr>
	              <td><div align="center">20</div></td>
	              <td>341 M697p</td>
	              <td width="20">to
	              </td>
	              <td>341.63 H124ca no.16</td>
	            </tr>
	            <tr>
	              <td><div align="center">21</div></td>
	              <td>341.63 H124ca no.17</td>
	              <td width="20">to
	              </td>
	              <td>345.4 L44 v.58</td>
	            </tr>
	            <tr>
	              <td><div align="center">22</div></td>
	              <td>345.4 L44 v.59</td>
	              <td width="20">to
	              </td>
	              <td>352.041435 B75lr</td>
	            </tr>
	            <tr>
	              <td><div align="center">23</div></td>
	              <td>352.042 C426c</td>
	              <td width="20">to
	              </td>
	              <td>360.5 Su79 v.75</td>
	            </tr>
	            <tr>
	              <td><div align="center">24</div></td>
	              <td>360.5 Su79 v.76</td>
	              <td width="20">to
	              </td>
	              <td>368.5 B621m</td>
	            </tr>
	            <tr>
	              <td><div align="center">25</div></td>
	              <td>368.5 C279s</td>
	              <td width="20">to
	              </td>
	              <td>379.12 Ax78f</td>
	            </tr>
	            <tr>
	              <td><div align="center">26</div></td>
	              <td>379.12 R526r</td>
	              <td width="20">to
	              </td>
	              <td>391.0942 L388e</td>
	            </tr>
	            <tr>
	              <td><div align="center">27</div></td>
	              <td>391.0942 L388EN</td>
	              <td width="20">to
	              </td>
	              <td>399.9 Z99</td>
	            </tr>
	            <tr>
	              <td><div align="center">28</div></td>
	              <td>emtpy</td>
	              <td width="20">to
	              </td>
	              <td>empty</td>
	            </tr>
	            <tr>
	              <td><div align="center">29</div></td>
	              <td>400 B62</td>
	              <td width="20">to
	              </td>
	              <td>420.9 M522a2</td>
	            </tr>
	            <tr>
	              <td><div align="center">30</div></td>
	              <td>400 A1</td>
	              <td width="20">to
	              </td>
	              <td>481.7 W734l</td>
	            </tr>
	            <tr>
	              <td><div align="center">31</div></td>
	              <td>481.7 W734l</td>
	              <td width="20">to
	              </td>
	              <td>653 G86gap</td>
	            </tr>
	            <tr>
	              <td><div align="center">32</div></td>
	              <td>653 G86gap</td>
	              <td width="20">to
	              </td>
	              <td>658.1 C79m</td>
	            </tr>
	            <tr>
	              <td><div align="center">33</div></td>
	              <td>658.1 C79m</td>
	              <td width="20">to
	              </td>
	              <td>659.105 P936 v.283</td>
	            </tr>
	            <tr>
	              <td><div align="center">34</div></td>
	              <td>659.105 P936 v.284</td>
	              <td width="20">to
	              </td>
	              <td>720.5 Am351 v.109</td>
	            </tr>
	            <tr>
	              <td><div align="center">35</div></td>
	              <td>720.5 Am351 v.110</td>
	              <td width="20">to
	              </td>
	              <td>759.2 J613RB</td>
	            </tr>
	            <tr>
	              <td><div align="center">36</div></td>
	              <td>759.2 J613Rz</td>
	              <td width="20">to
	              </td>
	              <td>782.08 N463s V.2</td>
	            </tr>
	            <tr>
	              <td><div align="center">37</div></td>
	              <td>782.08 Si53f</td>
	              <td width="20">to
	              </td>
	              <td>792.92 W693yf</td>
	            </tr>
	            <tr>
	              <td><div align="center">38</div></td>
	              <td>792.92 W822L</td>
	              <td width="20">to
	              </td>
	              <td>805 B568 v.XL</td>
	            </tr>
	            <tr>
	              <td><div align="center">39</div></td>
	              <td>805 B568 v.XLIII</td>
	              <td width="20">to
	              </td>
	              <td>805 F864 v.49</td>
	            </tr>
	            <tr>
	              <td><div align="center">40</div></td>
	              <td>805 F864 v.50</td>
	              <td width="20">to
	              </td>
	              <td>805 Q283 v.174</td>
	            </tr>
	            <tr>
	              <td><div align="center">41</div></td>
	              <td>805 Q283 v.175</td>
	              <td width="20">to
	              </td>
	              <td>808.5 M666a</td>
	            </tr>
	            <tr>
	              <td><div align="center">42</div></td>
	              <td>808.5 M463p</td>
	              <td width="20">to
	              </td>
	              <td>810.9 B726f</td>
	            </tr>
	            <tr>
	              <td><div align="center">43</div></td>
	              <td>810.9 B726f</td>
	              <td width="20">to
	              </td>
	              <td>812 St96ll</td>
	            </tr>
	            <tr>
	              <td><div align="center">44</div></td>
	              <td>812 St96ll</td>
	              <td width="20">to
	              </td>
	              <td>813 D38a</td>
	            </tr>
	            <tr>
	              <td><div align="center">45</div></td>
	              <td>813D38a</td>
	              <td width="20">to
	              </td>
	              <td>813 J23zp</td>
	            </tr>
	            <tr>
	              <td><div align="center">46</div></td>
	              <td>813 J23zp</td>
	              <td width="20">to
	              </td>
	              <td>814 M11es</td>
	            </tr>
	            <tr>
	              <td><div align="center">47</div></td>
	              <td>814 M11es</td>
	              <td width="20">to
	              </td>
	              <td>820.92 Au7k</td>
	            </tr>
	            <tr>
	              <td><div align="center">48</div></td>
	              <td>820.92 Au7k</td>
	              <td width="20">to
	              </td>
	              <td>821 C393c</td>
	            </tr>
	            <tr>
	              <td><div align="center">49</div></td>
	              <td>821 C393c</td>
	              <td width="20">to
	              </td>
	              <td>822 L533g</td>
	            </tr>
	            <tr>
	              <td><div align="center">50</div></td>
	              <td>822 L533g</td>
	              <td width="20">to
	              </td>
	              <td>823 D555wo</td>
	            </tr>
	            <tr>
	              <td><div align="center">51</div></td>
	              <td>823 D555wo</td>
	              <td width="20">to
	              </td>
	              <td>823 Sco8661</td>
	            </tr>
	            <tr>
	              <td><div align="center">52</div></td>
	              <td>823 Sco8661</td>
	              <td width="20">to
	              </td>
	              <td>823 L236</td>
	            </tr>
	            <tr>
	              <td><div align="center">53</div></td>
	              <td>828 L236</td>
	              <td width="20">to
	              </td>
	              <td>830.92 M315le</td>
	            </tr>
	            <tr>
	              <td><div align="center">54</div></td>
	              <td>830.92 M315le</td>
	              <td width="20">to
	              </td>
	              <td>838 G554wo</td>
	            </tr>
	            <tr>
	              <td><div align="center">55</div></td>
	              <td>838 G554wo</td>
	              <td width="20">to
	              </td>
	              <td>840.5 Q3r</td>
	            </tr>
	            <tr>
	              <td><div align="center">56</div></td>
	              <td>840.5 Q3r</td>
	              <td width="20">to
	              </td>
	              <td>841 G412l</td>
	            </tr>
	            <tr>
	              <td><div align="center">57</div></td>
	              <td>841 G412h</td>
	              <td width="20">to
	              </td>
	              <td>843 M445r</td>
	            </tr>
	            <tr>
	              <td><div align="center">58</div></td>
	              <td>843 M445r</td>
	              <td width="20">to
	              </td>
	              <td>848 B219o</td>
	            </tr>
	            <tr>
	              <td width="61">
	                <div align="center">59</div></td>
	              <td width="132">
	                848 B219o</td>
	              <td width="20">to
	              </td>
	              <td width="130">
	                853 G931Le</td>
	            </tr>
	            <tr>
	              <td width="61">
	                <div align="center">60</div></td>
	              <td width="132">
	                853 G931d</td>
	              <td width="20">to
	              </td>
	              <td width="130">
	                862 M36K</td>
	            </tr>
	            <tr>
	              <td width="61">
	                <div align="center">61</div></td>
	              <td width="132">
	                862 M36K</td>
	              <td width="20">to
	              </td>
	              <td width="130">
	                868 A 128sz</td>
	            </tr>
	            <tr>
	              <td><div align="center">62</div></td>
	              <td>868 A 128sz</td>
	              <td width="20">to
	              </td>
	              <td>880.9 Y12</td>
	            </tr>
	            <tr>
	              <td><div align="center">63</div></td>
	              <td>880.9 Y12</td>
	              <td width="20">to
	              </td>
	              <td>891.73 T84p</td>
	            </tr>
	            <tr>
	              <td><div align="center">64</div></td>
	              <td>891.73 T84p</td>
	              <td width="20">to
	              </td>
	              <td>898.3 R528f</td>
	            </tr>
	            <tr>
	              <td><div align="center">65</div></td>
	              <td>898.3 R528f</td>
	              <td width="20">to
	              </td>
	              <td>905 L761</td>
	            </tr>
	            <tr>
	              <td><div align="center">66</div></td>
	              <td>905 L761</td>
	              <td width="20">to
	              </td>
	              <td>910.4 P97</td>
	            </tr>
	            <tr>
	              <td><div align="center">67</div></td>
	              <td>910.4 P97</td>
	              <td width="20">to
	              </td>
	              <td>914 C81v</td>
	            </tr>
	            <tr>
	              <td><div align="center">68</div></td>
	              <td>914 C81v</td>
	              <td width="20">to
	              </td>
	              <td>915.6 St28ak</td>
	            </tr>
	            <tr>
	              <td><div align="center">69</div></td>
	              <td>915.6 St28ak</td>
	              <td width="20">to
	              </td>
	              <td>918 R812r </td>
	            </tr>
	            <tr>
	              <td><div align="center">70</div></td>
	              <td>918 R812r</td>
	              <td width="20">to
	              </td>
	              <td>920.92 H2792r</td>
	            </tr>
	            <tr>
	              <td><div align="center">71</div></td>
	              <td>920.92 H2792r</td>
	              <td width="20">to
	              </td>
	              <td>920.92 Sa27c</td>
	            </tr>
				<tr>
	              <td><div align="center">72</div></td>
	              <td>920.92 Sa27c</td>
	              <td width="20">to
	              </td>
	              <td>929.4 R221i</td>
	            </tr>
	            <tr>
	              <td><div align="center">73</div></td>
	              <td>929.4 R221i</td>
	              <td width="20">to
	              </td>
	              <td>940.9103 Al 15</td>
	            </tr>
	            <tr>
	              <td><div align="center">74</div></td>
	              <td>940.9103 Al 15</td>
	              <td width="20">to
	              </td>
	              <td>940.9223 Un373s </td>
	            </tr>
	            <tr>
	              <td><div align="center">75</div></td>
	              <td>940.9223 Un373s</td>
	              <td width="20">to
	              </td>
	              <td>942.084 C355i </td>
	            </tr>
	            <tr>
	              <td><div align="center">76</div></td>
	              <td>942.084 C355i</td>
	              <td width="20">to
	              </td>
	              <td>944.08 P44a</td>
	            </tr>
	            <tr>
	              <td><div align="center">77</div></td>
	              <td>944.08 P44a</td>
	              <td width="20">to
	              </td>
	              <td>949.6 G351f </td>
	            </tr>
	            <tr>
	              <td><div align="center">78</div></td>
	              <td>949.6 G351f</td>
	              <td width="20">to
	              </td>
	              <td>962 C88m </td>
	            </tr>
	            <tr>
	              <td><div align="center">79</div></td>
	              <td>971.01 C16n</td>
	              <td width="20">to
	              </td>
	              <td>972.03 B968cu2</td>
	            </tr>
	            <tr>
	              <td><div align="center">80</div></td>
	              <td>972.03 B968cu2</td>
	              <td width="20">to
	              </td>
	              <td>973.51 M265yH</td>
	            </tr>
	            <tr>
	              <td><div align="center">81</div></td>
	              <td>973.51 M265yH</td>
	              <td width="20">to
	              </td>
	              <td>975.5 Sm6t</td>
	            </tr>
	            <tr>
	              <td><div align="center">82</div></td>
	              <td>975.5 T149s</td>
	              <td width="20">to
	              </td>
	              <td>977.4 M58mb</td>
	            </tr>
	            <tr>
	              <td><div align="center">83</div></td>
	              <td>977.4 M582c v.1</td>
	              <td>to</td>
	              <td>982 B8621a t.47</td>
	            </tr>
	            <tr>
	              <td><div align="center">84</div></td>
	              <td>982.B8623d v.1</td>
	              <td width="20">to
	              </td>
	              <td>999 V835s</td>
	            </tr>
	        </table>
		</div>
			<h3><a href="#"> Other Locations in The Library</a></h3>
			<div>
				<table border="1" cellpadding=2 cellspacing="0">
					<tr>
						<td colspan="2"><div align="center"><strong>Holland Library</strong></div></td>
					  </tr>
					  <tr>
						<td width="317"> Cougar Copies</td>
						<td width="122">1st Floor</td>
					  </tr>
					  <tr>
						<td width="317"> Microforms</td>
						<td width="122">1st Floor</td>
					  </tr>
					  <tr>
						<td width="317"> Maproom</td>
						<td width="122">1st Floor</td>
					  </tr>
					  <tr>
						<td width="317"> Oversize</td>
						<td width="122">3rd Floor</td>
					  </tr>
			  		</table>
				  
				  &nbsp;
				  <table border="1" cellpadding=2 cellspacing="0">
			        <tr>
			          <td colspan="2"><div align="center"><strong>Terrell Library</strong></div>
			          </td>
			        </tr>
			        <tr>
			          <td width="317">Reference</td>
			          <td width="122">1st Floor</td>
			        </tr>
			        <tr>
			          <td>CJ/Newspaper</td>
			          <td>Ground Floor</td>
			        </tr>
			        <tr>
			          <td>MASC <font size="-3">(Manuscripts, Archives, and Special Collections)</font></td>
			          <td>Ground Floor</td>
			        </tr>
			        <tr>
			          <td>Media Materials/Reserves</td>
			          <td>Ground Floor</td>
			        </tr>
		      </table>
			</div>
		<!-- 
		<h3><a href="#">Call Number Map</a></h3>
		<div>
			<div align="center">
				<table border="1" cellpadding=2 cellspacing="0">
					  <tr>
						<td colspan="2"><div align="center"><strong>Holland Library</strong></div></td>
					  </tr>
					  <tr>
						<td width="280">HV 6000 - KZZ</td>
						<td width="143">1st Floor </td>
					  </tr>
					  <tr>
						<td>L - PS 3299 </td>
						<td>2nd Floor </td>
					  </tr>
					  <tr>
						<td>PS 3302 - Z</td>
						<td>3rd Floor </td>
					  </tr>
					  <tr>
						<td>Jackson (State/Int'l) Docs MA-YO </td>
						<td>3rd Floor </td>
					  </tr>
					  <tr>
						<td>US Docs A - Y </td>
						<td>3rd Floor </td>
					  </tr>
					  <tr>
						<td>Oversize</td>
						<td>3rd Floor </td>
					  </tr>
					</table>
	    		</div>
		   
			    <div align="center">
					<table border="1" cellpadding=2 cellspacing="0">
					  <tr>
						<td colspan="2"><div align="center"><strong>Terrell Library</strong></div></td>
					  </tr>
					  <tr>
						<td width="267">A - DC 9999 Z9 </td>
						<td width="145">1st Floor </td>
					  </tr>
					  <tr>
						<td>DD - HB 149 Z9 </td>
						<td>Ground Floor </td>
					  </tr>
					  <tr>
						<td>Hb 150- HV 5999 </td>
						<td>Basement</td>
					  </tr>
					  <tr valign="top">
						<td>001-999 (DEWEY) </td>
						<td>Basement, Compact Storage </td>
					  </tr>
					</table>					
			   </div>
			</div>
		-->
		</div>
	</div>
	
	<div class="span-9 last">
		<h1 align="center">Holland Library </h1>
		<div id="hollandDiv">
			<h3><a href="#" id="holland_1st_hd">1st Floor<br>Call Numbers: HV 6000 - KZ</a></h3>
			<div>
				<table border=1 cellspacing=0 cellpadding=2>
					<tbody id="holland_1st" class="stackchart">
				  <tr>
					<td width="66" valign="top"><strong> Stack# </strong></td>
					<td width="121" valign="top"><strong> Begins with: </strong></td>
					<td width="20" valign="top"><strong> &nbsp;</strong></td>
					<td width="139" valign="top"><strong> Ends with: </strong></td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> 401 </div></td>
					<td width="121" valign="top">Empty </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> Empty </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> 402 </div></td>
					<td width="121" valign="top"> Empty </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> Empty </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/H403-407.html"><strong>403</strong></a> </div></td>
					<td width="121" valign="top"> HV 6001 A1 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> HV 6016 Z9</td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/H403-407.html"><strong>404</strong></a><strong> </strong></div></td>
					<td width="121" valign="top"> HV 6017 A1 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> HV 6431 F9 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/H403-407.html"><strong>405</strong></a> </div></td>
					<td width="121" valign="top"> HV 6431 G1 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> HV 7921 A39 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/H403-407.html"><strong>406</strong></a> </div></td>
					<td width="121" valign="top"> HV 7921 A4 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> Hv 9468 L9 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <strong><a href="../../Usered/tutorials/hatmapsstacks/H403-407.html">407</a></strong> </div></td>
					<td width="121" valign="top">HV 9468 M1</td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> HX 44 G9 c.2 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/H407-408.html"><strong>408</strong></a> </div></td>
					<td width="121" valign="top"> HX 44 H1 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> HX 9999 Z9 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J409.html"><strong>409</strong></a> </div></td>
					<td width="121" valign="top"> J 1 A1 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> JA 1 R4 v.57</td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J409-411.html"><strong>410</strong></a> </div></td>
					<td width="121" valign="top"> JA 1 R4 v.58 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> JA 73 A79 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J409-411.html"><strong>411</strong></a> </div></td>
					<td width="121" valign="top"> JA 73 A8 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> JC 330 W69 1983 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J411-412.html"><strong>412</strong></a> </div></td>
					<td width="121" valign="top"> JC 330 W7 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> JF 107 B43 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J413.html"><strong>413</strong></a> </div></td>
					<td width="121" valign="top">JF 107 B43 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> JK 9 32</td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J413-415.html"><strong>414</strong></a> </div></td>
					<td width="121" valign="top"> JK 9 S2 1978 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> JK 1520 Z9 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J415-416.html"><strong>415</strong></a> </div></td>
					<td width="121" valign="top"> JK 1521 SA1 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> JL 99 M9 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J415-416.html"><strong>416</strong></a> </div></td>
					<td width="121" valign="top"> JL 99 N1 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top">JN 2728 C9 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J416-417.html"><strong>417</strong></a> </div></td>
					<td width="121" valign="top">JN 2728 D1 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> JQ 1512 Z9 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J418.html"><strong>418</strong></a> </div></td>
					<td width="121" valign="top"> JQ 1513 A1 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> JV 6008 L9 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J418-419.html"><strong>419</strong></a> </div></td>
					<td width="121" valign="top"> JV 6008 M1 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> JX 68 I5 v.16 no.1-3</td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J419-422.html"><strong>420</strong></a> </div></td>
					<td width="121" valign="top"> JX 68 I5 v.16 no.4-6 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> JX 1901 C66x v.38 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J419-422.html"><strong>421</strong></a> </div></td>
					<td width="121" valign="top"> JX 1901 C66x v.39</td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> JX 1995 I55 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J419-422.html"><strong>422</strong></a> </div></td>
					<td width="121" valign="top"> JX 1995 I56 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> JZ 5010.2 034 45th Sess v.11 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/J422-423.html"><strong>423</strong></a> </div></td>
					<td width="121" valign="top"> JZ 5010.2 034 45th Sess </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> K 8 A69 v.116 no.4-6 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/K423-425.html"><strong>424</strong></a> </div></td>
					<td width="121" valign="top"> K 8 A69 v.116 no.7-8 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> K 25 N63 1975 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/K425.html"><strong>425</strong></a> </div></td>
					<td width="121" valign="top"> K 25 N63 1976 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> KD 621 K9 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/K426.html"><strong>426</strong></a> </div></td>
					<td width="121" valign="top"> KD 621 M1 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> KF 120 F42 2nd ser. v.162 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/K426-432.html"><strong>427</strong></a> </div></td>
					<td width="121" valign="top"> KF 120 F42 2nd ser. v.163 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> KF 1544 G1 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/K426-432.html">428</a> </strong></div></td>
					<td width="121" valign="top"> KF 1544 H1 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> KF 4759 Z9 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/K426-432.html">429</a> </strong></div></td>
					<td width="121" valign="top"> KF 4760 A1 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top">KF 6360 A2 T13x v.22 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/K426-432.html">430</a> </strong></div></td>
					<td width="121" valign="top"> KF 6360 A2 T13x v.23 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> KF 6600 A6 C64 1997 v.15 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/K426-432.html">431</a> </strong></div></td>
					<td width="121" valign="top"> KF 6600 A6 C64 1997 v.16 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> KF 9625 B36 1983 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/K432.html">432</a> </strong></div></td>
					<td width="121" valign="top"> KF 9625 B37 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> KJC 6699 Z9 </td>
				  </tr>
				  <tr>
					<td width="66" valign="top"><div align="center"> <a href="../../Usered/tutorials/hatmapsstacks/K433.html"><strong>433 </strong></a></div></td>
					<td width="121" valign="top"> KJC 6700 A1 </td>
					<td width="20" valign="top"> to </td>
					<td width="139" valign="top"> KZZ Z9 </td>
				  </tr>
				  </tbody>
			  </table>
			</div>
			<h3><a href="#" id="holland_2nd_hd">2nd Floor<br>Call Numbers: L - PS 3299 </a></h3>
			<div>
				<table border=1 cellspacing=0 cellpadding=2>
					<tbody id="holland_2nd">
				  <tr>
					<td width="66" height="20" valign="top"><strong> Stack# </strong></td>
					<td width="121" height="20" valign="top"><strong> Begins with: </strong></td>
					<td width="23" height="20" valign="top"><strong> &nbsp;</strong></td>
					<td width="139" height="20" valign="top"><strong> Ends with: </strong></td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/L500-501.html">500</a> </strong></div></td>
					<td width="121" height="20" valign="top"> L 1 A1</td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> L 901 P3 v.76 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/L501-502.html">501</a> </strong></div></td>
					<td width="121" height="20" valign="top"> L 901 P3 v.77 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> LA 1221 M9</td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/L502-505.html">502</a> </strong></div></td>
					<td width="121" height="20" valign="top"> LA 1221 N1</td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> LB 1131 B42 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/L502-505.html">503</a> </strong></div></td>
					<td width="121" height="20" valign="top"> LB 1131 B43  </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> LB 2328.2 D9 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/L502-505.html">504</a> </strong></div></td>
					<td width="121" height="20" valign="top"> LB 2328.2 E1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> LB 2367.3 Z9 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/L502-505.html">505</a> </strong></div></td>
					<td width="121" height="20" valign="top"> LB 2367.4 A1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> LC 1011 W59 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/L506-507.html">506</a> </strong></div></td>
					<td width="121" height="20" valign="top"> LC 1101 W6 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> LD754.9 Z9</td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/L507-508.html">507</a> </strong></div></td>
					<td width="121" height="20" valign="top"> LD 755 A1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> LH 1 N7 C3 v.30 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/L508.html">508</a> </strong></div></td>
					<td width="121" height="20" valign="top"> LH 1 N7 C3 v.31 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> ML 1 C675 v.3 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/M508-516.html">509</a> </strong></div></td>
					<td width="121" height="20" valign="top"> ML 1 C68 no.1-3 1963-64 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> ML 1 J58 v.6 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/M508-516.html">510</a> </strong></div></td>
					<td width="121" height="20" valign="top"> ML 1 J6 v.3-4 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> ML 1 P109 v.42 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/M508-516.html">511</a> </strong></div></td>
					<td width="121" height="20" valign="top"> ML 1 P11 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> ML 5 O66 v.39 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/M508-516.html">512</a> </strong></div></td>
					<td width="121" height="20" valign="top"> ML 5 O66 v.40 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> ML 128 M3 S6 1981 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/M508-516.html">513</a> </strong></div></td>
					<td width="121" height="20" valign="top"> ML 128 M3 S7 1995 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> ML 410 B26 D7 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/M508-516.html">514</a> </strong></div></td>
					<td width="121" height="20" valign="top"> ML 410 B26 E75 1998 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> ML 422 B18 R68 2002 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/M508-516.html">515</a> </strong></div></td>
					<td width="121" height="20" valign="top"> ML 422 B19 M37 2002 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> ML 3505.8 J39x v.8 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/M516-517.html">516</a> </strong></div></td>
					<td width="121" height="20" valign="top"> ML 3505.8 J395 no.1-10 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> MT 67 S657 1990 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/M516-517.html">517</a> </strong></div></td>
					<td width="121" height="20" valign="top"> MT 67 S658 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> N 1 B95 v.121 no.914-917 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/N517-522.html">518</a> </strong></div></td>
					<td width="121" height="20" valign="top"> N 1 B95 v.121 no.918-921 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> N 81 A86 v.56-57 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/N517-522.html">519</a> </strong></div></td>
					<td width="121" height="20" valign="top"> N 81 A887 V.1-3 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> N6260 K7783 1966 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/N517-522.html">520</a> </strong></div></td>
					<td width="121" height="20" valign="top"> N 6260 M83 v.1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> N 6538 N5 N46 1990 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/N517-522.html">521</a> </strong></div></td>
					<td width="121" height="20" valign="top"> N 6538 N5 O1 2003 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> N 7400.2 I57 2005 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/N517-522.html">522</a> </strong></div></td>
					<td width="121" height="20" valign="top"> N 7400.2 J1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> NA 1996 K57 1998 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/N522-523.html">523</a> </strong></div></td>
					<td width="121" height="20" valign="top"> NA 1996.5 L43 v.1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> NB 237 E9 A35 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/N523-524.html">524</a> </strong></div></td>
					<td width="121" height="20" valign="top"> NB 237 F1 A4 2002 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> NC 1355 S77 2003 c.2 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/N524-525.html">525</a> </strong></div></td>
					<td width="121" height="20" valign="top"> NC 1356 M36 1994 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> ND 553 C33 A35 1977 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/N525-527.html">526</a> </strong></div></td>
					<td width="121" height="20" valign="top"> ND 553 C33 A35 1992 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> ND 1342 B55 1976 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/N527.html">527</a> </strong></div></td>
					<td width="121" height="20" valign="top"> ND 1342 C1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> NK 1047 M613 1985 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/N525-527.html">528</a> </strong></div></td>
					<td width="121" height="20" valign="top"> NK 1047 N1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> NK 4565.5 L43 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/N527-529.html">529</a> </strong></div></td>
					<td width="121" height="20" valign="top"> NK 4565.5 L44 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> NX 549 P2 S67 1996 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/N529-530.html">530</a> </strong></div></td>
					<td width="121" height="20" valign="top"> NX 549 P2 T1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> P 2 L5 v.39-40 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P530-534.html">531</a> </strong></div></td>
					<td width="121" height="20" valign="top"> P 2 M1 t.1 1952 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> P 37 A53x 1988 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P530-534.html">532</a> </strong></div></td>
					<td width="121" height="20" valign="top"> P 37 A54 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> P 95 L36 v.2 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P530-534.html">533</a> </strong></div></td>
					<td width="121" height="20" valign="top"> P 95 L37 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> P 215 P53 v.58-59 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P530-534.html">534</a> </strong></div></td>
					<td width="121" height="20" valign="top"> P 215 P54 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PA 1 I43 v.27-28 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P534-539.html">535</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PA 1 J1 v.6-7 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PA 2084 J6 1706a </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P534-539.html">536</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PA 2084 K1 1585ab </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PA 3875 A2 1967 t.5 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P534-539.html">537</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PA 3875 A3 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PA 5317 G42 G42x 1984 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P534-539.html">538</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PA 5317 G43 1984 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PA 6825 A3 1986 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P534-539.html">539</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PA 6825 A3 1986b </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PB 1 M642 v.16 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P539-541.html">540</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PB 1 M 642 v.17 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PB 35 A9 v.11 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P539-541.html">541</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PB 35 A9 v.12 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PC 13 N67 no.63 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P541-544.html">542</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PC 13 N67 no.64 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PC 2580 W3 Bd.8 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P541-544.html">543</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PC 2580 W3 Bd. 9 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PC 4129 E5 P96 2002 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P541-544.html">544</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PC 4129 E5 Q1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PD 5171 H4 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P545-547.html">545</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PD 5171 H5 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PE 1001 J1 v.9 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P545-547.html">546</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PE 1001 J2 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PE 1404 T24 1999 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P545-547.html">547</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PE 1404 T25 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PF 3058 K6 1969b </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P548-550.html">548</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PF 3058 K61 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PG 3245 F56 1983 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P548-550.html">549</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PG 3245 F6 1972 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PG 3488 O4 K6713x 1989 v.1 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P550.html">550</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PG 3488 O4 L1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PJ 5129 A5 L3 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P550-551.html">551</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PJ 5129 A6 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PL 726.33 Y35 G63 1998 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P551-553.html">552</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PL 726.34 K4 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PL 2698 V85 Z64 1988 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553.html">553</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PL 2699 A1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 1 M8 v.11 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">554</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 1 M8 v.12-14 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 2 R45 v.53-54 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">555</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 2 R46 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 4 W4 Jahrg. 48 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">556</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 5 A1 1991 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 51 I48x 1977 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">557</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 51 I49 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 59 G57 2001 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">558</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 59 G58 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 98 S7 T37 1989 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">559</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 98 S8 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 175 P4 v.26 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">560</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 175 P4 v.27 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 661 S6 v.55</td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">561</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 661 S6 v.56 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 771 S8 v.3-4 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">562</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 771 S8 v.5-6 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 1010 M6 1983 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">563</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 1010 M6 no.1 1965 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 1992 T1 v.35 no.27-30 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">564</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 1992 T1 v.35 no.31-35 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 1995.9 N4 B5 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">565</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 1995.9 N4 B6 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 2096 O4 A37 1978 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">566</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 2096 O4 A37 1979 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 3171 E36 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">567 </a></strong></div></td>
					<td width="121" height="20" valign="top"> PN 3171 E37 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 4700 G73x v.34-35 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">568</a> </strong></div></td>
					<td width="121" height="20" valign="top">PN 4700 G47 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 4899 S584 S6 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">569</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 4899 S59 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PN 6519 L74 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P553-570.html">570</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PN 6519 L75 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PQ 1184 A17 1971 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P570-578.html">571</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PQ 1184 A17 1972 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PQ 2159 C7 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P570-578.html">572</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PQ 2159 C71 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PQ 2607 E834 Z814 1973 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P570-578.html">573</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PQ 2607 E834 Z815 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PQ 3919.2 K3 F7 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P570-578.html">574</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PQ 3919.2 K3 F8 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PQ 6090 R3 1968 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P570-578.html">575</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PQ 6090 R4 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PQ 7081 A1 A5 2006 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P570-578.html">576</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PQ 7081 A1 A52 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PQ 7798.14 I3 B3 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P570-578.html">577</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PQ 7798.14 I3 C1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PQ 9698.1 M315 L5 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P570-578.html">578</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PQ 9698.1 M315 L6 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PR 31 E53 v.33-35 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P578-590.html">579 </a></strong></div></td>
					<td width="121" height="20" valign="top"> PR 32 A1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PR 651 C64 1985 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P578-590.html">580</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PR 651 C65 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PR 1875 O73 B68 1987 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P578-590.html">581</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PR 1875 P1 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PR 2976 T64 1989 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P578-590.html">582</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PR 2976 T65 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PR 3633 D8 v.4 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P578-590.html">583</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PR 3633 D81 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PR 4613 D5 A17 1970 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P578-590.html">584</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PR 4613 D5 A18 1960 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PR 5550 F72 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P578-590.html">585 </a></strong></div></td>
					<td width="121" height="20" valign="top"> PR 5550 F73 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PR 6011 O53 P3 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P578-590.html">586</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PR 6011 O53 P4 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PR 6025 A86 R3 1944 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P578-590.html">587</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PR 6025 A86 R3 1944 c.2 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PR 6053 H319 B6 1983b </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P578-590.html">588</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PR 6053 H320 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PR 8755 B67 2001 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P578-590.html">589</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PR 8755 B68 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PR 9619.3 M32 T5 1978 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P578-590.html">590</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PR 9619.3 M32 T5 1979 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PS 271 U64 1997 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P590-608.html">591</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PS 271 U65 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PS 551 N49 2005 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P590-608.html">592</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PS 551 N50 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PS 1589 E28 I5 1969 </td>
				  </tr>
				  <tr>
					<td width="66" height="20" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P590-608.html">593</a> </strong></div></td>
					<td width="121" height="20" valign="top"> PS 1589 E28 I6 </td>
					<td width="23" height="20" valign="top"> to </td>
					<td width="139" height="20" valign="top"> PS 3292 R4 H3 1973 </td>
				  </tr>
				  </tbody>
				</table>
			</div>
			<h3><a href="#" id="holland_3rd_hd">3rd Floor<br>Call Numbers: PS 3302- Z </a></h3>
			<div>
				<table border="1" cellspacing="0" cellpadding=2>
					<tbody id="holland_3rd">
				    <tr>
				      <td width="55" valign="top"><strong> Stack# </strong></td>
				      <td width="132" valign="top"><strong> Begins with: </strong></td>
				      <td width="20" valign="top"><strong> &nbsp;</strong></td>
				      <td width="133" valign="top"><strong> Ends with: </strong></td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P590-608.html">601 </a></strong></div></td>
				      <td width="132" valign="top"> PS 3302 V5 1970 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> PS 3505 H632 T4</td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P590-608.html">602</a> </strong></div></td>
				      <td width="132" valign="top"> PS 3505 H632 U1 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> PS 3523 O46 D9 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P590-608.html">603</a> </strong></div></td>
				      <td width="132" valign="top"> PS 3523 O46 E1 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> PS 3537 T3234 Z71559 1996 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P590-608.html">604 </a></strong></div></td>
				      <td width="132" valign="top"> PS 3537 T3234 Z7156 1993 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> PS 3553 A59 B9 1988 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P590-608.html">605 </a></strong></div></td>
				      <td width="132" valign="top"> PS 3553 A59 C1 1989 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> PS 3558 O 336 L9 1973 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P590-608.html">606</a> </strong></div></td>
				      <td width="132" valign="top"> PS 3558 O336 M1 1983 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> PS 3565 A8 S49 2005 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P590-608.html">607</a> </strong></div></td>
				      <td width="132" valign="top"> PS 3565 A8 S6X </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> PS 3573 A42 3399 1995 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P590-608.html">608 </a></strong></div></td>
				      <td width="132" valign="top"> PS 3573 A42 E4 1988 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> PT 870.9 Z9 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P608-612.html">609</a> </strong></div></td>
				      <td width="132" valign="top"> PT 871 A1 1985 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> PT 2293 A1 1968 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P608-612.html">610</a> </strong></div></td>
				      <td width="132" valign="top"> PT 2293 A1 1969 Bd.1 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> PT 2603 R3979 1979 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P608-612.html">611</a> </strong></div></td>
				      <td width="132" valign="top"> PT 2603 R397 A1 1988 Bd.1 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> PT 2647 I25 H9 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P608-612.html">612</a> </strong></div></td>
				      <td width="132" valign="top"> PT 2647 I 25 I 1 1950 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> PZ 1 A1 A457 V.126 NO.7-12 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/P612-613.html">613</a> </strong></div></td>
				      <td width="132" valign="top"> PZ 1 A1 A488X V.1 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> PZ 9 T665 1989 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Q614.html">614</a> </strong></div></td>
				      <td width="132" valign="top"> Q 1 A1 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> QH 331 B49 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Q614-615.html">615 </a></strong></div></td>
				      <td width="132" valign="top"> QH 331 B5 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> RA 771.49 J68x V. 21 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/R616.html">616</a> </strong></div></td>
				      <td width="132" valign="top"> RA 771.5 A1 2004 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> RC 321 M39 V.49 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/R616-619.html">617</a> </strong></div></td>
				      <td width="132" valign="top"> RC 321 M4 V.50 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> RC 489 B4 B4359 V.23 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/R616-619.html">618</a> </strong></div></td>
				      <td width="132" valign="top"> RC 489 B4 B435 V.24 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> RC 1200 Z9 2006 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/R619.html">619</a> </strong></div></td>
				      <td width="132" valign="top"> RC 1201 A1 1997 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> SB 483 S4 S49 1957 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/S619-620.html">620 </a></strong></div></td>
				      <td width="132" valign="top"> SB 483 S4 S4 1958 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> T 175.49 R47X Z9 1987/2004 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/T620-621.html">621</a> </strong></div></td>
				      <td width="132" valign="top"> T 175.5 A1 1986 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> TK 9152 I 69 1988 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/T621-622.html">622</a> </strong></div></td>
				      <td width="132" valign="top"> TK 9152 I 7 2004 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> TR 299 M 6 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/T622-623.html">623</a> </strong></div></td>
				      <td width="132" valign="top"> TR 300 O 93 1973 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> TS 879 T38 1991 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/T624.html">624</a> </strong></div></td>
				      <td width="132" valign="top"> TS 880 C45 C73 1998</td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> TX 1 G7 V. 236 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/T624-626.html">625</a> </strong></div></td>
				      <td width="132" valign="top"> TX 1 G7 V. 237 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> TX 911.3 M27 H9 1982 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/T624-626.html">626</a> </strong></div></td>
				      <td width="132" valign="top"> TX 911.3 M27 I 1 1996</td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> UA 23 D44 1983 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/U627.html">627</a> </strong></div></td>
				      <td width="132" valign="top"> UA 23 D4423 2000 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> UG 446.5 B9 1986 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/U628.html">628 </a></strong></div></td>
				      <td width="132" valign="top"> UG 446.5 C1 1996 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> WSU E22 1983 Z9 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/W628-629.html">629</a> </strong></div></td>
				      <td width="132" valign="top"> WSU E22 1984 A1 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> Z 43 B53x 1954 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Z629-643.html">630</a> </strong></div></td>
				      <td width="132" valign="top"> Z 43 B58 1982 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> Z 479 D5 1978 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Z629-643.html">631</a> </strong></div></td>
				      <td width="132" valign="top"> Z 479 D5 1979 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> Z 673 A5 A5 V.22 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Z629-643.html">632</a> </strong></div></td>
				      <td width="132" valign="top"> Z 673 A5 A5 V.23 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> Z 699 A1 V.5 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Z629-643.html">633</a> </strong></div></td>
				      <td width="132" valign="top"> Z699 A1 P7 V.6 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> Z 881 A1 U375 1979 V.2 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Z629-643.html">634</a> </strong></div></td>
				      <td width="132" valign="top"> Z 881 A1 U375 1979 V.3 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> Z 881 H345 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Z629-643.html">635 </a></strong></div></td>
				      <td width="132" valign="top"> Z 881 H346</td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> Z 1002 U55x v.33 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Z629-643.html">636</a> </strong></div></td>
				      <td width="132" valign="top"> Z 1002 U55x v.34 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> Z 1035 C5 v.26 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Z629-643.html">637</a> </strong></div></td>
				      <td width="132" valign="top"> Z 1035 C5 v.27 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> Z 1219 P98 v.129 No.1-13 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Z629-643.html">638</a> </strong></div></td>
				      <td width="132" valign="top"> Z 1219 P98 v.129 No.14-26</td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> Z 2221 D945 1982 Heft 13-18 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Z629-643.html">639 </a></strong></div></td>
				      <td width="132" valign="top"> Z 2221 D 495 1982 Heft 19-24 </td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> Z 5055 G29 D4 1977 Heft 1-4 </td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Z629-643.html">640</a> </strong></div></td>
				      <td width="132" valign="top"> Z 5055 G29 D4</td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> Z 6951 A97 1960</td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Z629-643.html">641</a> </strong></div></td>
				      <td width="132" valign="top"> Z 6951 A97 1961</td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> Z7164 E2 J6 v.21</td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Z629-643.html">642</a> </strong></div></td>
				      <td width="132" valign="top"> Z 7164 E2 J6 v.22</td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> Z 8215 Z9</td>
				    </tr>
				    <tr>
				      <td width="55" valign="top"><div align="center"><strong> <a href="../../Usered/tutorials/hatmapsstacks/Z629-643.html">643 </a></strong></div></td>
				      <td width="132" valign="top"> Z8216 A1</td>
				      <td width="20" valign="top"> to </td>
				      <td width="133" valign="top"> ZZ 9999 Z9 </td>
				    </tr>
				    </tbody>
			    </table>
			</div>
			<h3><a href="#" id="holland_3rd_hd">3rd Floor<br>Jackson Documents (State/Internat'l Govt. Docs.) </a></h3>
			<div>
				<table border="1" cellspacing="0" cellpadding=2>
			        <tr>
			          <td width="55" valign="top"><strong> Stack# </strong></td>
			          <td width="192" valign="top"><strong> Begins with: </strong></td>
			          <td width="192" valign="top"><strong> Ends with: </strong></td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>700 </strong></div></td>
			          <td width="192" valign="top"> HOLDOC MA 1 AR17 AL 11 V.34 </td>
			          <td width="192" valign="top"> HOLDOC MW 9 BH B4959<BR> 53rd session No.1015-1070 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>701 </strong></div></td>
			          <td width="192" valign="top"> HOLDOC MW 9 BH B495 <br> 53rd session No. 1017-1115 </td>
			          <td width="192" valign="top"> HOLDOC MW 9 SO 24 A9 W279 1981 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>702 </strong></div></td>
			          <td width="192" valign="top"> HOLDOC MW 9 S0 24 B1 H816 </td>
			          <td width="192" valign="top"> HOLDOC PC 49 R9 ST 9 T 19 1994 ed.</td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>703 </strong></div></td>
			          <td width="192" valign="top"> HOLDOC PC 49 S1 C16 v. 28 1953 Jan-June </td>
			          <td width="192" valign="top"> HOLDOC PG 129 B P2399 1970/71 v.17 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>704 </strong></div></td>
			          <td width="192" valign="top"> HOLDOC PG 129 B P239 1970/71 v.18 </td>
			          <td width="192" valign="top"> HOLDOC PG 129 co 89 qk L4139 1952 v.2 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>705 </strong></div></td>
			          <td width="192" valign="top"> HOLDOC PG 129 co 89 qk L413 1953 v.1 </td>
			          <td width="192" valign="top"> HOLDOC PI 33 in37 C685g no.5 1905-1906</td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>706 </strong></div></td>
			          <td width="192" valign="top"> HOLDOC PI 33 IN 37 C685g No. 6 1906-07 </td>
			          <td width="192" valign="top"> HOLDOC TIN 17 Su61 1973 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>707 </strong></div></td>
			          <td width="192" valign="top"> TIN 17 Su61 1974 </td>
			          <td width="192" valign="top"> TP 17 I826 annee 10 1967 Nov.-Dec. </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>708 </strong></div></td>
			          <td width="192" valign="top"> HOLDOC TP 17 J826 annee 10 1967 index </td>
			          <td width="192" valign="top"> HOLDOC TU 51 TD/B Of 3 14th session v.2 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>709 </strong></div></td>
			          <td width="192" valign="top"> HOLDOC TU 51 TD/B Of 3 14th session v.3 </td>
			          <td width="192" valign="top"> HOLDOC UNY 72 SKJ Y9 1974 Aug.-1975 June </td>
			        </tr>
			      </table>
			</div>
			<h3><a href="#" id="holland_3rd_hd">3rd Floor<br>US Government Documents</a></h3>
			<div>
				<table border="1" cellspacing="0" cellpadding=2>
			        <tr>
			          <td width="55" valign="top"><strong> Stack# </strong></td>
			          <td width="160" valign="top"><strong> Begins with: </strong></td>
			          <td width="20" valign="top"><strong> &nbsp;</strong></td>
			          <td width="196" valign="top"><strong> Ends with: </strong></td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>800 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC A 1.1/3 1983 1st half </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC AE 2.106/4 1991 v.5 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>801 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC AE 2.108 D 65/1991 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC C 3.204 1974 No. 18-22 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>802 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC C 3.204 1974 No. 23-27 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC C 3.230 1967 No.3 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>803 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC C 3.230 1967 No.4 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC C 57.111 1979 No. 80-156 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>804 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC C 57.119 In2 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC CS 1.66 v10-12</td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>805 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC CSA 1.10 1977 No.32 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC D 301.79 No. 8 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>806 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC D 301.79 No.10 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC FR 1.2 F 31/2 1954 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>807 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC FR 1.2 F 31/2 1963 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC GA 1.13 C 73/37 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>808 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC GA 1.13 C 73/41 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC HE 20.2420 v.8 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>809 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC HE 20.2420/2 C65 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC I 24.7 1915 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>810 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC I 24.8:1 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC IC 1 Act 5/2 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>811 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC IC lmst. 8 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC Ju 6.8 v.487 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>812 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC Ju 6.8 v.488 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC L 2.41/2 v.19 No. 1-6 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>813 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC L 2.41/2 v.19 No. 7-12 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC LC 30.9 v.50 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>814 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC LC 30.9 v.51 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC PM 1.15 1991 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>815 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC PM 1.15 1992 March </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC PREX 3.15 2005 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>816 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC PrEx 3.17 AS 7 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC PrEx 7.9/a D141 Dec 1959 pt.3</td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>817 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC PrEx 7.9/a D141 Dec. 1959 pt.4 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC S 4.7 Nos. 42-44 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>818 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC S 4.7 No.45 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC T 22.35/4 v.18 No.3-4 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>819 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC T 22.35/4 v.19 No.1 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC Y 1.2/5 1994 ed. v. 17 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>820 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC Y 1.2/5 1994 ed. v. 18 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC Y4.Ap 6/1 D36/5 1975-2 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>821 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC Y4.Ap 6/1 D36/5 1975 pt.9 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC Y4.C73/7 Iv 7 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>822 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC Y4.C73/7 L62</td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC Y4.In 8/13 Se 1/5 pt.5 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>823 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC Y4.In8/13 Se 8 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC Y4.Sci2 93rd Cong No.1 </td>
			        </tr>
			        <tr>
			          <td width="55" valign="top"> <div align="center"><strong>824 </strong></div></td>
			          <td width="160" valign="top"> HOLDOC Y4.Sci2 93rd Cong No.2 </td>
			          <td width="20" valign="top"> to </td>
			          <td width="196" valign="top"> HOLDOC Z999 </td>
			        </tr>
			      </table>
			</div>
			
			
		</div>
	</div>
	
	<!-- 
	<div class"span-6 last">
		<h2 align="center">Call Number Map</h2>
		<div>
			<table border="1">
				<tr>
					<td>Hey</td>
				</tr>
			</table>		
		</div>
		<div id="callMapDiv">
			<table>
				<tbody class="call_map">					  
					  <tr>
						<td >A - DC </td>
						<td >Terrel 1st</td>
					  </tr>
					  <tr>
						<td>DD - HB 149 Z9 </td>
						<td>Terrel Ground</td>
					  </tr>
					  <tr>
						<td>HB 150- HV 5999 </td>
						<td>Terrel Basement</td>
					  </tr>					 
					  <tr>
						<td >HV 6000 - KZZ</td>
						<td >Holland First</td>
					  </tr>
					  <tr>
						<td>L - PS 3299 </td>
						<td>Holland Second</td>
					  </tr>
					  <tr>
						<td>PS 3300 - Z</td>
						<td>Holland Third</td>
					  </tr>
					  <tr>
						<td>Jackson Docs </td>
						<td>Holland Third</td>
					  </tr>
					  <tr>
						<td>US Docs A - Y </td>
						<td>Holland Third</td>
					  </tr>					  
				</tbody>
			</table>
		</div>
	</div>
	-->	
	

</div>

<div style="clear: both"></div>
<!-- 
<h3 align="center">WSU Libraries &nbsp;<input type=BUTTON NAME=BtnName VALUE='RETURN' onClick='Return()'></h4>
<div id=lifoot>
<center>
<script type="text/javascript" src="http://www.wsulibs.wsu.edu/electric/library_lingo/javascripts/footers/Footer.js"></script>
</center>
</div>
-->
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=7177095; 
var sc_invisible=1; 
var sc_security="d916318d"; 
</script>
<script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script>
<noscript><div class="statcounter"><a title="godaddy
statistics"
href="http://statcounter.com/godaddy_website_tonight/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/7177095/0/d916318d/1/"
alt="godaddy statistics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</div>
<!-- INCLUDE FOOTER FILE HERE        Do Not Edit                                   -->
<script language="JavaScript" src="javascripts/footers/li_footer.js" type="text/javascript"></script> 
<!-- END FOOTER HEADER FILE                                               -->
</body>
</html>