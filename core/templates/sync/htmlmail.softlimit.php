<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr><td>
<table cellspacing="0" cellpadding="0" border="0" width="600px">
<tr>
<td bgcolor="<?php p($theme->getMailHeaderColor());?>" width="20px">&nbsp;</td>
<td bgcolor="<?php p($theme->getMailHeaderColor());?>">
<img src="<?php p(\OC::$server->getURLGenerator()->getAbsoluteURL(image_path('', 'logo-mail.gif'))); ?>" alt="<?php p($theme->getName()); ?>"/>
</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="20px">&nbsp;</td>
<td style="font-weight:normal; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
<?php p($l->t('Hello %s,', [$_['displayname']])); ?>
<br>
<br>
<?php p($l->t('You are getting near the %s users, which is the maximum number of enabled users you can have in the %s backend.', [$_['hardLimit'], $_['backend']])); ?>
<br>
<?php p($l->t('You can disable some users in order to avoid hitting the limit.')); ?>
<br>
<?php p($l->t('Contact %s for more information.', [$theme->getEntity()])); ?>
<br>
<br>
<?php p($l->t("Cheers!")); ?>
</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="20px">&nbsp;</td>
<td style="font-weight:normal; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
	<?php print_unescaped($this->inc('html.mail.footer')); ?>
</td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
</table>
</td></tr>
</table>