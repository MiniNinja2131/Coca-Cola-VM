// Allow the user to change the camera angle from a button click
function cameraFront()
{
	document.getElementById('model__FrontCamera').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__BackCamera').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__LeftCamera').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__RightCamera').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__TopCamera').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}

function wireFrame()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var spinning = false;

function spin(){
	spinning = !spinning;
	document.getElementById('model__canPin-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__canTop-TIMER').setAttribute('enabled', spinning.toString());

	document.getElementById('model__shellBottle-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__labelAndCap-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__liquid-TIMER').setAttribute('enabled', spinning.toString());

	document.getElementById('model__upperLip-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__label-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__liquid2-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__bottleCap-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__bottle-TIMER').setAttribute('enabled', spinning.toString());
}

function stopRotation(){
	spinning = false;
	document.getElementById('model__canPin-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__canTop-TIMER').setAttribute('enabled', spinning.toString());

	document.getElementById('model__shellBottle-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__labelAndCap-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__liquid-TIMER').setAttribute('enabled', spinning.toString());

	document.getElementById('model__upperLip-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__label-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__bottleCap-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__liquid2-TIMER').setAttribute('enabled', spinning.toString());
	document.getElementById('model__bottle-TIMER').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('model__animationCam-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model__animationCam-TIMER').setAttribute('enabled', 'true');
    else
        document.getElementById('model__animationCam-TIMER').setAttribute('enabled', 'false');
}

var lightOn = true;
function light()
{
	lightOn = !lightOn;
	document.getElementById('model__TopLight').setAttribute('on', lightOn.toString());
	document.getElementById('model__LeftLight').setAttribute('on', lightOn.toString());
	document.getElementById('model__RightLight').setAttribute('on', lightOn.toString());
	document.getElementById('model__FrontLight').setAttribute('on', lightOn.toString());
	document.getElementById('model__BackLight').setAttribute('on', lightOn.toString());
	document.getElementById('model__BotLight').setAttribute('on', lightOn.toString());
	console.log(lightOn);
}
