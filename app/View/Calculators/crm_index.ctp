<!DOCTYPE html>
<html lang="<?php echo $configLanguage; ?>" dir="<?php echo $dirType; ?>">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--	<title>SCIENTIFIC CALCULATOR</title>-->
	<?php echo $this->Html->css('calclayout'); ?>
	<?php echo $this->Html->script('bean'); ?>
	<?php echo $this->Html->script('jquery-ui-1.10.4.min'); ?>
	<?php echo $this->Html->script('jquery.ui.touch-punch.min.js'); ?>
	<?php echo $this->Html->script('oscZenoedited'); ?>
	<!-- <script type="text/javascript" src="Calc/js/jquery-1.9.1.min.js"></script>  -->
	<meta http-equiv="X-UA-Compatible" content="IE=8" />
	<script>
		$('#closeButton').click(function () {
			$('#loadCalc').hide();
			$('#keyPad_UserInput').val(0);
			$('#keyPad_UserInput1').val('');
		});



		$(function () {
			$("#loadCalc").draggable({
				start: function () {
					// $(this).css({ height: "auto", width: "463px" });
				},
				stop: function () {
					// $(this).css({ height: "auto", width: "463px" });
				}
			});

			$(".calc_min").live('click', function () {
				$('#mainContentArea').toggle();
				$('#keyPad_Help').hide();
				$('#keyPad_Helpback').hide();
				$('#keyPad').addClass("reduceWidth");
				$('#helptopDiv span').addClass("reduceHeader");
				//		$('#calc_min').toggleClass("reduceHeader");
				$(this).removeClass("calc_min").addClass('calc_max');
			});
			$(".calc_max").live('click', function () {
				$(this).removeClass("calc_max").addClass('calc_min');
				$('#mainContentArea').toggle();
				if (mockVar.showCalculator == "SCIENTIFIC")
					$('#keyPad_Help').show();
				$('#keyPad').removeClass("reduceWidth");
				$('#helptopDiv span').removeClass("reduceHeader");
			});
		});
		$('#closeButton').click(function () {
			$('#loadCalc').hide();
		});
		/** new help changes **/
		$('#keyPad_Help').live('click', function () {
			$(this).hide();
			$('#keyPad_Helpback').show();
			$('.text_container').hide();
			$('.left_sec').hide();
			$('#keyPad_UserInput1').hide(); {
				$('#helpContent').show();
			}

		});

		$('#keyPad_Helpback').live('click', function () {
			$(this).hide();
			$('#keyPad_Help').show();
			$('.text_container').show();
			$('.left_sec').show();
			$('#keyPad_UserInput1').show();
			$('#helpContent').hide();

		});

		/** new help changes **/
	</script>
	<style type="text/css">
		*.unselectable {
			-moz-user-select: -moz-none;
			-khtml-user-select: none;
			-webkit-user-select: none;

			/*
			 Introduced in IE 10.
			 See http://ie.microsoft.com/testdrive/HTML5/msUserSelect/
		   */
			-ms-user-select: none;
			user-select: none;
		}
	</style>

</head>

<body>
	<div id="keyPad" class="calc_container">
		<div id="helptopDiv">
			<span id="scientificText" style="display:none"><b>Scientific</b> <b>Calculator</b></span>
			<span id="normalText" style="display:none"><b>&nbsp;</b> <b>Calculator</b></span>
			<div class="help_back" id="keyPad_Help" href="#nogo"></div>
			<div class="help_back" id="keyPad_Helpback" href="#nogo" style="display:none;"></div>
		</div>
		<div id="calc_min" class="calc_min"></div>
		<div id="closeButton" class="calc_close"></div>
		<!--<div class="calc_close" id="closeButton">X</div>-->
		<div id="mainContentArea">
			<input type="text" id="keyPad_UserInput1" class="keyPad_TextBox1" readonly="readonly"
				onfocus="this.value = this.value;" />
			<div class="text_container">
				<input type="text" id="keyPad_UserInput" class="keyPad_TextBox" maxlength="30" readonly="readonly" />
				<span id="memory" class="memoryhide" style="height:22px;">
					<font size="2">M</font>
				</span>
			</div>
			<div class="clear"></div>
			<div class="left_sec">
				<div class="calc_row clear">
					<a id="keyPad_btnMod" class="keyPad_btnBinaryOp">mod</a>
					<div class="degree_radian">
						<input type="radio" name="degree_or_radian" value="deg" checked="checked">Deg</input>
						<input type="radio" name="degree_or_radian" value="rad">Rad</input>
					</div>
					<a id="keyPad_btnPi" class="keyPad_btnConst" style="visibility:hidden;">&#960;</a>
					<a id="keyPad_btnE" class="keyPad_btnConst" style="visibility:hidden;">e</a>
					<a id="keyPad_btnE" class="keyPad_btnConst" style="visibility:hidden;">e</a>
					<a id="keyPad_MC" class="keyPad_btnMemoryOp">MC</a>
					<a id="keyPad_MR" class="keyPad_btnMemoryOp">MR</a>
					<a id="keyPad_MS" class="keyPad_btnMemoryOp">MS</a>
					<a id="keyPad_M+" class="keyPad_btnMemoryOp">M+</a>
					<a id="keyPad_M-" class="keyPad_btnMemoryOp">M-</a>
				</div>
				<div class="calc_row clear">
					<a id="keyPad_btnSinH" class="keyPad_btnUnaryOp min">sinh</a>
					<a id="keyPad_btnCosinH" class="keyPad_btnUnaryOp min">cosh</a>
					<a id="keyPad_btnTgH" class="keyPad_btnUnaryOp min">tanh</a>
					<a id="keyPad_EXP" class="keyPad_btnBinaryOp">Exp</a>
					<a id="keyPad_btnOpen" class="keyPad_btnBinaryOp ">(</a>
					<a id="keyPad_btnClose" class="keyPad_btnBinaryOp ">)</a>
					<span>
						<a id="keyPad_btnBack" class="keyPad_btnCommand calc_arrows">
							<div style="position: relative; top: -3px">&#8592;</div>
						</a>
						<a id="keyPad_btnAllClr" class="keyPad_btnCommand">C</a>
						<a id="keyPad_btnInverseSign" class="keyPad_btnUnaryOp">+/-</a>
						<a id="keyPad_btnSquareRoot" class="keyPad_btnUnaryOp">
							<div style="position: relative; top: 1px">&#8730;</div>
						</a>
					</span>
				</div>
				<div class="calc_row clear" style="margin-top: 5px;">
					<a id="keyPad_btnAsinH" class="keyPad_btnUnaryOp min "><span class='baseele'>sinh</span><span
							class='superscript'>-1</span></a>
					<a id="keyPad_btnAcosH" class="keyPad_btnUnaryOp min "><span class='baseele'>cosh</span><span
							class='superscript'>-1</span></a>
					<a id="keyPad_btnAtanH" class="keyPad_btnUnaryOp min "><span class='baseele'>tanh</span><span
							class='superscript'>-1</span></a>
					<a id="keyPad_btnLogBase2" class="keyPad_btnUnaryOp"><span class='baseele'>log</span><span
							class='subscript'>2</span><span class='baseele'>x</span></a>
					<a id="keyPad_btnLn" class="keyPad_btnUnaryOp">ln</a>
					<a id="keyPad_btnLg" class="keyPad_btnUnaryOp">log</a>
					<a id="keyPad_btn7" class="keyPad_btnNumeric">7</a>
					<a id="keyPad_btn8" class="keyPad_btnNumeric">8</a>
					<a id="keyPad_btn9" class="keyPad_btnNumeric ">9</a>
					<a id="keyPad_btnDiv" class="keyPad_btnBinaryOp">/</a>
					<a id="keyPad_%" class="keyPad_btnBinaryOp">%</a>
				</div>
				<div class="calc_row clear">
					<a id="keyPad_btnPi" class="keyPad_btnConst">&#960;</a>
					<a id="keyPad_btnE" class="keyPad_btnConst">e</a>
					<a id="keyPad_btnFact" class="keyPad_btnUnaryOp">n!</a>
					<a id="keyPad_btnYlogX" class="keyPad_btnBinaryOp "><span class='baseele'>log</span><span
							class='subscript'>y</span><span class='baseele'>x</span></a>
					<a id="keyPad_btnExp" class="keyPad_btnUnaryOp"><span class='baseele'>e</span><span
							class='superscript'>x</span></a>
					<a id="keyPad_btn10X" class="keyPad_btnUnaryOp"><span class='baseele'>10</span><span
							class='superscript'>x</span></a>


					<a id="keyPad_btn4" class="keyPad_btnNumeric">4</a>
					<a id="keyPad_btn5" class="keyPad_btnNumeric">5</a>
					<a id="keyPad_btn6" class="keyPad_btnNumeric ">6</a>
					<a id="keyPad_btnMult" class="keyPad_btnBinaryOp">
						<div style="position: relative; top: 3px; font-size: 20px">*</div>
					</a>
					<a id="keyPad_btnInverse" class="keyPad_btnUnaryOp"><span class='baseele'>1/x</span></a>
				</div>
				<div class="calc_row clear">
					<a id="keyPad_btnSin" class="keyPad_btnUnaryOp min ">sin</a>
					<a id="keyPad_btnCosin" class="keyPad_btnUnaryOp min">cos</a>
					<a id="keyPad_btnTg" class="keyPad_btnUnaryOp min">tan</a>
					<a id="keyPad_btnYpowX" class="keyPad_btnBinaryOp"><span class='baseele'>x</span><span
							class='superscript'>y</span></a>
					<a id="keyPad_btnCube" class="keyPad_btnUnaryOp"><span class='baseele'>x</span><span
							class='superscript'>3</span></a>
					<a id="keyPad_btnSquare" class="keyPad_btnUnaryOp"><span class='baseele'>x</span><span
							class='superscript'>2</span></a>
					<a id="keyPad_btn1" class="keyPad_btnNumeric">1</a>
					<a id="keyPad_btn2" class="keyPad_btnNumeric">2</a>
					<a id="keyPad_btn3" class="keyPad_btnNumeric">3</a>
					<a id="keyPad_btnMinus" class="keyPad_btnBinaryOp">
						<div style="position: relative; top: -1px; font-size: 20px">-</div>
					</a>
				</div>
				<div class="calc_row clear">
					<a id="keyPad_btnAsin" class="keyPad_btnUnaryOp min"><span class='baseele'>sin</span><span
							class='superscript'>-1</span></a>
					<a id="keyPad_btnAcos" class="keyPad_btnUnaryOp min"><span class='baseele'>cos</span><span
							class='superscript'>-1</span></a>
					<a id="keyPad_btnAtan" class="keyPad_btnUnaryOp min"><span class='baseele'>tan</span><span
							class='superscript'>-1</span></a>
					<a id="keyPad_btnYrootX" class="keyPad_btnBinaryOp"><span class='superscript'
							style='top: -8px;'>y</span><span class='baseele'
							style='font-size: 1.2em; margin: -6px 0 0 -9px;'>&#8730;x</span></a>
					<a id="keyPad_btnCubeRoot" class="keyPad_btnUnaryOp">
						<font size="3">&#8731; </font>
					</a>
					<a id="keyPad_btnAbs" class="keyPad_btnUnaryOp"><span class='baseele'>|x|</span></a>
					<a id="keyPad_btn0" class="keyPad_btnNumeric">0</a>
					<a id="keyPad_btnDot" class="keyPad_btnNumeric ">.</a>
					<a id="keyPad_btnPlus" class="keyPad_btnBinaryOp">+</a>
					<a id="keyPad_btnEnter" class="keyPad_btnCommand ">
						<div style="margin-bottom: 2px;">=</div>
					</a>
				</div>
			</div>
			<div id="helpContent" style="display:none;">
				<h3 style="text-align:center;"><strong>Calculator Instructions</strong></h3>
				Allows you to perform basic and complex mathematical operations such as modulus, square root, cube root,
				trigonometric, exponential, logarithmic, hyperbolic functions, etc.
				<br> You can operate the calculator using the buttons provided on screen with your mouse. <br>
				<br>
				<h3 style=" text-decoration: underline;color: green">Do's:</h3>
				<ul>
					<li> Be sure to press [C] when beginning a new calculation.</li>
					<li> Simply an equation using parenthesis and other mathematical operators.</li>
					<li> Use the predefined operations such as p (Pi), log, Exp to save time during calculation.</li>
					<li> Use memory function for calculating cumulative totals.</li>
					<strong>
						[M+]: Will add displayed value to memory.
						<br>
						[MR]: Will recall the value stored in memory.
						<br>
						[M-]: Subtracts the displayed value from memory.
					</strong>
					<li> Be sure select the angle unit (Deg or Rad) before beginning any calculation.</li>
					<strong>Note: By default angle unit is set as Degree</strong>
				</ul>
				<h3><span style=" text-decoration: underline;color: red">Dont's:</span></h3>
				<ul>
					<li> Perform multiple operations together.</li>
					<li> Leave parenthesis unbalanced.</li>
					<li> Change the angle unit (Deg or Rad) while performing a calculation..</li>
				</ul>
				<h3><span style=" text-decoration: underline;">Limitations:</span></h3>
				<ul>
					<li> Keyboard operation is disabled.</li>
					<li> The output for a Factorial calculation is precise up to 14 digits.</li>
					<li> The output for Logarithmic and Hyperbolic calculations is precise up to 5 digits.</li>
					<li> 4. Modulus (mod) operation performed on decimal numbers with 15 digits would not be precise.
					</li>
					<br>
					<strong> Use mod operation only if the number comprises of less than 15 digits i.e. mod operation
						provides best results for smaller numbers.</strong>
					<br>
					<li>The range of value supported by the calculator is 10(-323) to 10(308).0</li>
				</ul>
				<br>
				<br>
			</div>
			<div class="clear"></div>
		</div>
</body>

</html>