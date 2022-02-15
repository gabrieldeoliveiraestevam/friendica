<?php
/**
 * @copyright Copyright (C) 2010-2022, the Friendica project
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 */

namespace Friendica\Module;

use Friendica\App;
use Friendica\BaseModule;
use Friendica\Core\Config\Capability\IManageConfigValues;
use Friendica\Core\L10n;
use Friendica\Core\Renderer;
use Friendica\Content\Text\BBCode;
use Friendica\Util\Profiler;
use Psr\Log\LoggerInterface;

class Tos extends BaseModule
{
	// Some text elements we need more than once to keep updating them easy.
	public $privacy_operate;
	public $privacy_distribute;
	public $privacy_delete;
	public $privacy_complete;

	/** @var IManageConfigValues */
	protected $config;

	/**
	 * constructor for the module, initializing the text variables
	 *
	 * To make the text variables available outside of the module, they need to
	 * be properties of the class, however cannot be set directly as the property
	 * cannot depend on a function result when declaring the variable.
	 **/
	public function __construct(L10n $l10n, App\BaseURL $baseUrl, App\Arguments $args, LoggerInterface $logger, Profiler $profiler, Response $response, IManageConfigValues $config, array $server, array $parameters = [])
	{
		parent::__construct($l10n, $baseUrl, $args, $logger, $profiler, $response, $server, $parameters);

		$this->config  = $config;

		$this->privacy_operate    = $this->t('<ul>
		<li>
		  <p>O que é o CICFriend?</p>
		  <p>Uma rede social! Aqui você pode postar dúvidas, divulgar projetos, mandar mensagens, participar de fóruns das suas disciplinas e muito mais.</p>
		  </li>
		<li>
		  <p>E a minha privacidade?</p>
		  <p>O CICFriend é uma iniciativa do Departamento de Ciência da Computação da UnB e sua inscrição é feita pelo e-mail da UnB. Só vamos usá-lo para mandar notificações. O seu nome aparece para todos na sua página de perfil.</p>
		</li>
		<li>
		  <p>E os meus dados?</p>
		  <p>Seus dados são seus! Você pode exportá-los e excluir seu perfil quando quiser. Você escolhe quem pode e não pode ver cada uma das suas publicações. Não vamos fazer nada com seus dados sem antes pedir seu consentimento!</p>
		</li>
		<li>
		  <p>E o que não pode fazer?</p>
		  <p>Não pode nenhum tipo de assédio, discurso de ódio, violência ou bullying! Caso algum conteúdo desobedeça as regras da universidade, ou seja ilegal de qualquer maneira, medidas administrativas e legais podem ser tomadas. Se encontrar algum conteúdo malicioso, denuncie para o administrador.</p>
		</li>
	  </ul>
	  <p>Para mais informações e dados de contato, ver Termo de Uso e Politica de Privacidade.</p>');
		//$this->privacy_distribute = $this->t('This data is required for communication and is passed on to the nodes of the communication partners and is stored there. Users can enter additional private data that may be transmitted to the communication partners accounts.');
		//$this->privacy_delete     = $this->t('At any point in time a logged in user can export their account data from the <a href="%1$s/settings/userexport">account settings</a>. If the user wants to delete their account they can do so at <a href="%1$s/removeme">%1$s/removeme</a>. The deletion of the account will be permanent. Deletion of the data will also be requested from the nodes of the communication partners.', $this->baseUrl);
		// In some cases we don't need every single one of the above separate, but all in one block.
		// So here is an array to look over
		$this->privacy_complete = [$this->t('Privacy Statement'), $this->privacy_operate];
		//						   $this->privacy_distribute, $this->privacy_delete];
	}

	/**
	 * generate the content of the /tos page
	 *
	 * The content of the /tos page is generated from two parts.
	 * (1) a free form part the admin of the node can set in the admin panel
	 * (2) an optional privacy statement that gives some transparency about
	 *     what information are needed by the software to provide the service.
	 *     This privacy statement has fixed text, so it can be translated easily.
	 *
	 * @return string
	 * @throws \Friendica\Network\HTTPException\InternalServerErrorException
	 */
	protected function content(array $request = []): string
	{
		if (strlen($this->config->get('system', 'singleuser'))) {
			$this->baseUrl->redirect('profile/' . $this->config->get('system', 'singleuser'));
		}

		$tpl = Renderer::getMarkupTemplate('tos.tpl');
		if ($this->config->get('system', 'tosdisplay')) {
			return Renderer::replaceMacros($tpl, [
				'$title'                => $this->t('Terms of Service'),
				'$tostext'              => BBCode::convert($this->config->get('system', 'tostext')),
				'$displayprivstatement' => $this->config->get('system', 'tosprivstatement'),
				'$privstatementtitle'   => $this->t('Privacy Statement'),
				'$privacy_operate'      => $this->t('<ul>
				<li>
				  <p>O que é o CICFriend?</p>
				  <p>Uma rede social! Aqui você pode postar dúvidas, divulgar projetos, mandar mensagens, participar de fóruns das suas disciplinas e muito mais.</p>
				  </li>
				<li>
				  <p>E a minha privacidade?</p>
				  <p>O CICFriend é uma iniciativa do Departamento de Ciência da Computação da UnB e sua inscrição é feita pelo e-mail da UnB. Só vamos usá-lo para mandar notificações. O seu nome aparece para todos na sua página de perfil.</p>
				</li>
				<li>
				  <p>E os meus dados?</p>
				  <p>Seus dados são seus! Você pode exportá-los e excluir seu perfil quando quiser. Você escolhe quem pode e não pode ver cada uma das suas publicações. Não vamos fazer nada com seus dados sem antes pedir seu consentimento!</p>
				</li>
				<li>
				  <p>E o que não pode fazer?</p>
				  <p>Não pode nenhum tipo de assédio, discurso de ódio, violência ou bullying! Caso algum conteúdo desobedeça as regras da universidade, ou seja ilegal de qualquer maneira, medidas administrativas e legais podem ser tomadas. Se encontrar algum conteúdo malicioso, denuncie para o administrador.</p>
				</li>
			  </ul>'),
				'$privacy_distribute'   => $this->t('This data is required for communication and is passed on to the nodes of the communication partners and is stored there. Users can enter additional private data that may be transmitted to the communication partners accounts.'),
				'$privacy_delete'       => $this->t('At any point in time a logged in user can export their account data from the <a href="%1$s/settings/userexport">account settings</a>. If the user wants to delete their account they can do so at <a href="%1$s/removeme">%1$s/removeme</a>. The deletion of the account will be permanent. Deletion of the data will also be requested from the nodes of the communication partners.', $this->baseUrl)
			]);
		} else {
			return '';
		}
	}
}
