<?php

function formatPrix($nb)
{

	if (is_float($nb))
	{
		return number_format($nb,2,","," ")."€";


	}
	else
	{

		return number_format($nb,0,","," ")."€";
	}
}