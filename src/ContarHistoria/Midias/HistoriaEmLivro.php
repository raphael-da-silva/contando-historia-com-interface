<?php

namespace ContarHistoria\Midias;

use ContarHistoria\MidiaParaContarHistoria;

/**
 *
 * @author Raphael da Silva
 *
 */
class HistoriaEmLivro implements MidiaParaContarHistoria
{

	public function contarHistoria()
	{

		echo 'Usando um livro para contar uma história.';

	}

}