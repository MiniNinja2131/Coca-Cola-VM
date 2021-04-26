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