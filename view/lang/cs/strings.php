<?php

if(! function_exists("string_plural_select_cs")) {
function string_plural_select_cs($n){
	$n = intval($n);
	if (($n == 1 && $n % 1 == 0)) { return 0; } else if (($n >= 2 && $n <= 4 && $n % 1 == 0)) { return 1; } else if (($n % 1 != 0 )) { return 2; } else  { return 3; }
}}
$a->strings['Item not found.'] = 'Položka nenalezena.';
$a->strings['Do you really want to delete this item?'] = 'Opravdu chcete smazat tuto položku?';
$a->strings['Yes'] = 'Ano';
$a->strings['Cancel'] = 'Zrušit';
$a->strings['Permission denied.'] = 'Přístup odmítnut.';
$a->strings['Daily posting limit of %d post reached. The post was rejected.'] = [
	0 => 'Byl dosažen denní limit %d příspěvku. Příspěvek byl odmítnut.',
	1 => 'Byl dosažen denní limit %d příspěvků. Příspěvek byl odmítnut.',
	2 => 'Byl dosažen denní limit %d příspěvku. Příspěvek byl odmítnut.',
	3 => 'Byl dosažen denní limit %d příspěvků. Příspěvek byl odmítnut.',
];
$a->strings['Weekly posting limit of %d post reached. The post was rejected.'] = [
	0 => 'Byl dosažen týdenní limit %d příspěvku. Příspěvek byl odmítnut.',
	1 => 'Byl dosažen týdenní limit %d příspěvků. Příspěvek byl odmítnut.',
	2 => 'Byl dosažen týdenní limit %d příspěvku. Příspěvek byl odmítnut.',
	3 => 'Byl dosažen týdenní limit %d příspěvků. Příspěvek byl odmítnut.',
];
$a->strings['Monthly posting limit of %d post reached. The post was rejected.'] = 'Byl dosažen měsíční limit %d příspěvků. Příspěvek byl odmítnut.';
$a->strings['Profile Photos'] = 'Profilové fotky';
$a->strings['event'] = 'událost';
$a->strings['status'] = 'stav';
$a->strings['photo'] = 'fotka';
$a->strings['%1$s likes %2$s\'s %3$s'] = 'Uživateli %1$s se líbí %3$s uživatele %2$s';
$a->strings['%1$s doesn\'t like %2$s\'s %3$s'] = 'Uživateli %1$s se nelíbí %3$s uživatele  %2$s';
$a->strings['%1$s attends %2$s\'s %3$s'] = '%1$s se účastní %3$s uživatele %2$s';
$a->strings['%1$s doesn\'t attend %2$s\'s %3$s'] = '%1$s se neúčastní %3$s uživatele %2$s';
$a->strings['%1$s attends maybe %2$s\'s %3$s'] = '%1$s se možná účastní %3$s uživatele %2$s';
$a->strings['%1$s is now friends with %2$s'] = '%1$s se nyní přátelí s uživatelem %2$s';
$a->strings['%1$s poked %2$s'] = '%1$s šťouchnul/a uživatele %2$s';
$a->strings['%1$s tagged %2$s\'s %3$s with %4$s'] = '%1$s označil/a %3$s uživatele %2$s štítkem %4$s';
$a->strings['post/item'] = 'příspěvek/položka';
$a->strings['%1$s marked %2$s\'s %3$s as favorite'] = '%1$s označil/a %3$s uživatele %2$s jako oblíbené';
$a->strings['Likes'] = 'Libí se';
$a->strings['Dislikes'] = 'Nelibí se';
$a->strings['Attending'] = [
	0 => 'Účastní se',
	1 => 'Účastní se',
	2 => 'Účastní se',
	3 => 'Účastní se',
];
$a->strings['Not attending'] = 'Neúčastní se';
$a->strings['Might attend'] = 'Mohl/a by se zúčastnit';
$a->strings['Reshares'] = 'Znovusdílení';
$a->strings['Select'] = 'Vybrat';
$a->strings['Delete'] = 'Odstranit';
$a->strings['View %s\'s profile @ %s'] = 'Zobrazit profil uživatele %s na %s';
$a->strings['Categories:'] = 'Kategorie:';
$a->strings['Filed under:'] = 'Vyplněn pod:';
$a->strings['%s from %s'] = '%s z %s';
$a->strings['View in context'] = 'Zobrazit v kontextu';
$a->strings['Please wait'] = 'Čekejte prosím';
$a->strings['remove'] = 'odstranit';
$a->strings['Delete Selected Items'] = 'Smazat vybrané položky';
$a->strings['Follow Thread'] = 'Sledovat vlákno';
$a->strings['View Status'] = 'Zobrazit stav';
$a->strings['View Profile'] = 'Zobrazit profil';
$a->strings['View Photos'] = 'Zobrazit fotky';
$a->strings['Network Posts'] = 'Síťové příspěvky';
$a->strings['View Contact'] = 'Zobrazit kontakt';
$a->strings['Send PM'] = 'Poslat soukromou zprávu';
$a->strings['Block'] = 'Blokovat';
$a->strings['Ignore'] = 'Ignorovat';
$a->strings['Poke'] = 'Šťouchnout';
$a->strings['Connect/Follow'] = 'Spojit se/sledovat';
$a->strings['%s likes this.'] = 'Uživateli %s se tohle líbí.';
$a->strings['%s doesn\'t like this.'] = 'Uživateli %s se tohle nelíbí.';
$a->strings['%s attends.'] = '%s se účastní.';
$a->strings['%s doesn\'t attend.'] = '%s se neúčastní.';
$a->strings['%s attends maybe.'] = '%s se možná účastní.';
$a->strings['%s reshared this.'] = '%s tohle znovusdílel/a.';
$a->strings['and'] = 'a';
$a->strings['and %d other people'] = 'a dalších %d lidí';
$a->strings['<span  %1$s>%2$d people</span> like this'] = '<span  %1$s>%2$d lidem</span> se tohle líbí';
$a->strings['%s like this.'] = 'Uživatelům %s se tohle líbí.';
$a->strings['<span  %1$s>%2$d people</span> don\'t like this'] = '<span  %1$s>%2$d lidem</span> se tohle nelíbí';
$a->strings['%s don\'t like this.'] = 'Uživatelům %s se tohle nelíbí.';
$a->strings['<span  %1$s>%2$d people</span> attend'] = '<span  %1$s>%2$d lidí</span> se účastní';
$a->strings['%s attend.'] = '%s se účastní.';
$a->strings['<span  %1$s>%2$d people</span> don\'t attend'] = '<span  %1$s>%2$d lidí</span> se neúčastní';
$a->strings['%s don\'t attend.'] = '%s se neúčastní';
$a->strings['<span  %1$s>%2$d people</span> attend maybe'] = '<span  %1$s>%2$d lidí</span> se možná účastní';
$a->strings['%s attend maybe.'] = '%s se možná účastní';
$a->strings['<span  %1$s>%2$d people</span> reshared this'] = '<span  %1$s>%2$d lidí</span> tohle znovusdílelo';
$a->strings['Visible to <strong>everybody</strong>'] = 'Viditelné pro <strong>všechny</strong>';
$a->strings['Please enter a image/video/audio/webpage URL:'] = 'Prosím zadejte URL obrázku/videa/audia/webové stránky:';
$a->strings['Tag term:'] = 'Štítek:';
$a->strings['Save to Folder:'] = 'Uložit do složky:';
$a->strings['Where are you right now?'] = 'Kde právě jste?';
$a->strings['Delete item(s)?'] = 'Smazat položku(y)?';
$a->strings['New Post'] = 'Nový příspěvek';
$a->strings['Share'] = 'Sdílet';
$a->strings['Upload photo'] = 'Nahrát fotku';
$a->strings['upload photo'] = 'nahrát fotku';
$a->strings['Attach file'] = 'Přiložit soubor';
$a->strings['attach file'] = 'přiložit soubor';
$a->strings['Bold'] = 'Tučné';
$a->strings['Italic'] = 'Kurziva';
$a->strings['Underline'] = 'Podtržené';
$a->strings['Quote'] = 'Citace';
$a->strings['Code'] = 'Kód';
$a->strings['Image'] = 'Obrázek';
$a->strings['Link'] = 'Odkaz';
$a->strings['Link or Media'] = 'Odkaz nebo média';
$a->strings['Set your location'] = 'Nastavit vaši polohu';
$a->strings['set location'] = 'nastavit polohu';
$a->strings['Clear browser location'] = 'Vymazat polohu v prohlížeči';
$a->strings['clear location'] = 'vymazat polohu';
$a->strings['Set title'] = 'Nastavit nadpis';
$a->strings['Categories (comma-separated list)'] = 'Kategorie (seznam, oddělujte čárkou)';
$a->strings['Permission settings'] = 'Nastavení oprávnění';
$a->strings['permissions'] = 'oprávnění';
$a->strings['Public post'] = 'Veřejný příspěvek';
$a->strings['Preview'] = 'Náhled';
$a->strings['Post to Groups'] = 'Zveřejnit ve skupinách';
$a->strings['Post to Contacts'] = 'Zveřejnit v kontaktech';
$a->strings['Private post'] = 'Soukromý příspěvek';
$a->strings['Message'] = 'Zpráva';
$a->strings['Browser'] = 'Prohlížeč';
$a->strings['View all'] = 'Zobrazit vše';
$a->strings['Like'] = [
	0 => 'Líbí se',
	1 => 'Líbí se',
	2 => 'Líbí se',
	3 => 'Líbí se',
];
$a->strings['Dislike'] = [
	0 => 'Nelíbí se',
	1 => 'Nelíbí se',
	2 => 'Nelíbí se',
	3 => 'Nelíbí se',
];
$a->strings['Not Attending'] = [
	0 => 'Neúčastní se',
	1 => 'Neúčastní se',
	2 => 'Neúčastní se',
	3 => 'Neúčastní se',
];
$a->strings['Undecided'] = [
	0 => 'Nerozhodnut',
	1 => 'Nerozhodnutí',
	2 => 'Nerozhodnutých',
	3 => 'Nerozhodnuti',
];
$a->strings['Friendica Notification'] = 'Oznámení Friendica';
$a->strings['Thank You,'] = 'Děkuji,';
$a->strings['%1$s, %2$s Administrator'] = '%1$s, administrátor %2$s';
$a->strings['%s Administrator'] = 'Administrátor %s';
$a->strings['[Friendica:Notify] New mail received at %s'] = '[Friendica:Oznámení] Obdržena nová zpráva na %s';
$a->strings['%1$s sent you a new private message at %2$s.'] = '%1$s vám poslal/a novou soukromou zprávu na %2$s.';
$a->strings['a private message'] = 'soukromou zprávu';
$a->strings['%1$s sent you %2$s.'] = '%1$s vám poslal/a %2$s.';
$a->strings['Please visit %s to view and/or reply to your private messages.'] = 'Pro zobrazení vašich soukromých zpráv a možnost na ně odpovědět prosím navštivte %s.';
$a->strings['%1$s tagged you on [url=%2$s]a %3$s[/url]'] = '%1$s vás označil/a na [url=%2$s]%3$s[/url]';
$a->strings['%1$s commented on [url=%2$s]a %3$s[/url]'] = '%1$s okomentoval/a [url=%2$s]%3$s[/url]';
$a->strings['%1$s tagged you on [url=%2$s]%3$s\'s %4$s[/url]'] = '%1$s vás označil/a na  [url=%2$s]%3$s uživatele %4$s[/url]';
$a->strings['%1$s commented on [url=%2$s]%3$s\'s %4$s[/url]'] = '%1$s okomentoval/a [url=%2$s]%4$s od %3$s[/url]';
$a->strings['%1$s tagged you on [url=%2$s]your %3$s[/url]'] = '%1$s vás označil/a na [url=%2$s]vašem %3$s[/url]';
$a->strings['%1$s commented on [url=%2$s]your %3$s[/url]'] = '%1$s okomentoval/a [url=%2$s]váš/vaši %3$s[/url]';
$a->strings['%1$s tagged you on [url=%2$s]their %3$s[/url]'] = '%1$s vás označil/a na [url=%2$s]jeho/její %3$s[/url]';
$a->strings['%1$s commented on [url=%2$s]their %3$s[/url]'] = '%1$s okomentoval/a [url=%2$s]svůj %3$s[/url]';
$a->strings['[Friendica:Notify] %s tagged you'] = '[Friendica:Oznámení] %s vás označil/a';
$a->strings['%1$s tagged you at %2$s'] = '%1$s vás označil/a na %2$s';
$a->strings['[Friendica:Notify] Comment to conversation #%1$d by %2$s'] = '[Friendica:Oznámení] Komentář ke konverzaci #%1$d od %2$s';
$a->strings['%s commented on an item/conversation you have been following.'] = '%s okomentoval/a vámi sledovanou položku/konverzaci.';
$a->strings['Please visit %s to view and/or reply to the conversation.'] = 'Prosím navštivte %s pro zobrazení konverzace a možnosti odpovědět.';
$a->strings['[Friendica:Notify] %s posted to your profile wall'] = '[Friendica:Oznámení] %s přidal/a příspěvek na vaši profilovou zeď';
$a->strings['%1$s posted to your profile wall at %2$s'] = '%1$s přidal/a příspěvek na vaši profilovou zeď na %2$s';
$a->strings['%1$s posted to [url=%2$s]your wall[/url]'] = '%1$s přidal/a příspěvek na [url=%2$s]vaši zeď[/url]';
$a->strings['[Friendica:Notify] %s shared a new post'] = '[Friendica:Oznámení] %s sdílel/a nový příspěvek';
$a->strings['%1$s shared a new post at %2$s'] = '%1$s sdílel/a nový příspěvek na %2$s';
$a->strings['%1$s [url=%2$s]shared a post[/url].'] = '%1$s [url=%2$s]sdílel/a příspěvek[/url].';
$a->strings['[Friendica:Notify] %1$s poked you'] = '[Friendica:Oznámení] %1$s vás šťouchnul/a';
$a->strings['%1$s poked you at %2$s'] = '%1$s vás šťouchnul/a na %2$s';
$a->strings['%1$s [url=%2$s]poked you[/url].'] = '%1$s [url=%2$s]vás šťouchnul/a[/url].';
$a->strings['[Friendica:Notify] %s tagged your post'] = '[Friendica:Oznámení] %s označil/a váš příspěvek';
$a->strings['%1$s tagged your post at %2$s'] = '%1$s označil/a váš příspěvek na %2$s';
$a->strings['%1$s tagged [url=%2$s]your post[/url]'] = '%1$s označil/a [url=%2$s]váš příspěvek[/url]';
$a->strings['[Friendica:Notify] Introduction received'] = '[Friendica:Oznámení] Obdrženo představení';
$a->strings['You\'ve received an introduction from \'%1$s\' at %2$s'] = 'Obdržel/a jste představení od uživatele „%1$s“ na %2$s';
$a->strings['You\'ve received [url=%1$s]an introduction[/url] from %2$s.'] = 'Obdržel/a jste [url=%1$s]představení[/url] od uživatele %2$s.';
$a->strings['You may visit their profile at %s'] = 'Můžete navštívit jeho/její profil na %s';
$a->strings['Please visit %s to approve or reject the introduction.'] = 'Prosím navštivte %s pro schválení či zamítnutí představení.';
$a->strings['[Friendica:Notify] A new person is sharing with you'] = '[Friendica:Oznámení] Nový člověk s vámi sdílí';
$a->strings['%1$s is sharing with you at %2$s'] = 'Uživatel %1$s s vámi sdílí na %2$s';
$a->strings['[Friendica:Notify] You have a new follower'] = '[Friendica:Oznámení] Máte nového sledujícího';
$a->strings['You have a new follower at %2$s : %1$s'] = 'Máte nového sledujícího na %2$s: %1$s';
$a->strings['[Friendica:Notify] Friend suggestion received'] = '[Friendica:Oznámení] Obdržen návrh přátelství';
$a->strings['You\'ve received a friend suggestion from \'%1$s\' at %2$s'] = 'Obdržel/a jste návrh přátelství od uživatele „%1$s“ na %2$s';
$a->strings['You\'ve received [url=%1$s]a friend suggestion[/url] for %2$s from %3$s.'] = 'Obdržel/a jste [url=%1$s]návrh přátelství[/url] s uživatelem %2$s od uživatele %3$s.';
$a->strings['Name:'] = 'Jméno:';
$a->strings['Photo:'] = 'Fotka:';
$a->strings['Please visit %s to approve or reject the suggestion.'] = 'Prosím navštivte %s pro schválení či zamítnutí návrhu.';
$a->strings['[Friendica:Notify] Connection accepted'] = '[Friendica:Oznámení] Spojení přijato';
$a->strings['\'%1$s\' has accepted your connection request at %2$s'] = '„%1$s“ přijal/a váš požadavek o spojení na %2$s';
$a->strings['%2$s has accepted your [url=%1$s]connection request[/url].'] = '%2$s přijal/a váš [url=%1$s]požadavek o spojení[/url].';
$a->strings['You are now mutual friends and may exchange status updates, photos, and email without restriction.'] = 'Jste nyní vzájemní přátelé a můžete si vyměňovat stavové zprávy, fotky a e-maily bez omezení.';
$a->strings['Please visit %s if you wish to make any changes to this relationship.'] = 'Pokud chcete provést změny s tímto vztahem, prosím navštivte %s.';
$a->strings['\'%1$s\' has chosen to accept you a fan, which restricts some forms of communication - such as private messaging and some profile interactions. If this is a celebrity or community page, these settings were applied automatically.'] = '„%1$s“ se rozhodl/a vás přijmout jako fanouška, což omezuje některé formy komunikace - například soukoromé zprávy a některé interakce s profily. Pokud je toto stránka celebrity či komunity, byla tato nastavení aplikována automaticky.';
$a->strings['\'%1$s\' may choose to extend this into a two-way or more permissive relationship in the future.'] = '„%1$s“ se může rozhodnout tento vztah v budoucnosti rozšířit do oboustranného či jiného liberálnějšího vztahu.';
$a->strings['Please visit %s  if you wish to make any changes to this relationship.'] = 'Prosím navštivte %s  pokud chcete změnit tento vztah.';
$a->strings['[Friendica System Notify]'] = '[Systémové oznámení Friendica]';
$a->strings['registration request'] = 'požadavek o registraci';
$a->strings['You\'ve received a registration request from \'%1$s\' at %2$s'] = 'Obdržel/a jste požadavek o registraci od uživatele „%1$s“ na %2$s';
$a->strings['You\'ve received a [url=%1$s]registration request[/url] from %2$s.'] = 'Obdržel/a jste [url=%1$s]požadavek o registraci[/url] od uživatele %2$s.';
$a->strings['Full Name:	%s
Site Location:	%s
Login Name:	%s (%s)'] = 'Celé jméno:		%s
Adresa stránky:		%s
Přihlašovací jméno:	%s (%s)';
$a->strings['Please visit %s to approve or reject the request.'] = 'Prosím navštivte %s k odsouhlasení nebo k zamítnutí požadavku.';
$a->strings['Authorize application connection'] = 'Povolit připojení aplikacím';
$a->strings['Return to your app and insert this Securty Code:'] = 'Vraťte se do vaší aplikace a zadejte tento bezpečnostní kód:';
$a->strings['Please login to continue.'] = 'Pro pokračování se prosím přihlaste.';
$a->strings['Do you want to authorize this application to access your posts and contacts, and/or create new posts for you?'] = 'Chcete umožnit této aplikaci přístup k vašim příspěvkům a kontaktům a/nebo k vytváření Vašich nových příspěvků?';
$a->strings['No'] = 'Ne';
$a->strings['Parent user not found.'] = 'Rodičovský uživatel nenalezen.';
$a->strings['No parent user'] = 'Žádný rodičovský uživatel';
$a->strings['Parent Password:'] = 'Rodičovské heslo:';
$a->strings['Please enter the password of the parent account to legitimize your request.'] = 'Prosím vložte heslo rodičovského účtu k legitimizaci vašeho požadavku.';
$a->strings['Parent User'] = 'Rodičovský uživatel';
$a->strings['Parent users have total control about this account, including the account settings. Please double check whom you give this access.'] = 'Rodičovští uživatelé mají naprostou kontrolu nad tímto účtem, včetně nastavení účtu. Prosím překontrolujte, komu tento přístup dáváte.';
$a->strings['Save Settings'] = 'Uložit nastavení';
$a->strings['Delegate Page Management'] = 'Správa delegátů stránky';
$a->strings['Delegates'] = 'Delegáti';
$a->strings['Delegates are able to manage all aspects of this account/page except for basic account settings. Please do not delegate your personal account to anybody that you do not trust completely.'] = 'Delegáti jsou schopni řídit všechny aspekty tohoto účtu/stránky, kromě základních nastavení účtu. Prosím, nedelegujte svůj osobní účet nikomu, komu zcela nedůvěřujete.';
$a->strings['Existing Page Delegates'] = 'Stávající delegáti stránky ';
$a->strings['Potential Delegates'] = 'Potenciální delegáti';
$a->strings['Remove'] = 'Odstranit';
$a->strings['Add'] = 'Přidat';
$a->strings['No entries.'] = 'Žádné záznamy.';
$a->strings['Post successful.'] = 'Příspěvek úspěšně odeslán';
$a->strings['Subscribing to OStatus contacts'] = 'Registruji Vás ke kontaktům OStatus';
$a->strings['No contact provided.'] = 'Nebyl poskytnut žádný kontakt.';
$a->strings['Couldn\'t fetch information for contact.'] = 'Nelze načíst informace pro kontakt.';
$a->strings['Couldn\'t fetch friends for contact.'] = 'Nelze načíst přátele pro kontakt.';
$a->strings['Done'] = 'Hotovo';
$a->strings['success'] = 'úspěch';
$a->strings['failed'] = 'selhalo';
$a->strings['ignored'] = 'ignorován';
$a->strings['Keep this window open until done.'] = 'Toto okno nechte otevřené až do konce.';
$a->strings['Permission denied'] = 'Nedostatečné oprávnění';
$a->strings['Invalid profile identifier.'] = 'Neplatný identifikátor profilu.';
$a->strings['Profile Visibility Editor'] = 'Editor viditelnosti profilu ';
$a->strings['Profile'] = 'Profil';
$a->strings['Click on a contact to add or remove.'] = 'Klikněte na kontakt pro přidání nebo odebrání';
$a->strings['Visible To'] = 'Viditelný uživatelům';
$a->strings['All Contacts (with secure profile access)'] = 'Všem kontaktům (se zabezpečeným přístupem k profilu)';
$a->strings['Account approved.'] = 'Účet schválen.';
$a->strings['Registration revoked for %s'] = 'Registrace zrušena pro %s';
$a->strings['Please login.'] = 'Přihlaste se, prosím.';
$a->strings['User deleted their account'] = 'Uživatel si smazal účet';
$a->strings['On your Friendica node an user deleted their account. Please ensure that their data is removed from the backups.'] = 'Uživatel na vašem serveru Friendica smazal svůj účet. Prosím ujistěte se, ře jsou jeho data odstraněna ze záloh dat.';
$a->strings['The user id is %d'] = 'Uživatelské ID je %d';
$a->strings['Remove My Account'] = 'Odstranit můj účet';
$a->strings['This will completely remove your account. Once this has been done it is not recoverable.'] = 'Tímto bude kompletně odstraněn váš účet. Jakmile bude účet odstraněn, nebude už možné ho obnovit.';
$a->strings['Please enter your password for verification:'] = 'Prosím, zadejte své heslo pro ověření:';
$a->strings['Resubscribing to OStatus contacts'] = 'Znovu Vás registruji ke kontaktům OStatus';
$a->strings['Error'] = [
	0 => 'Chyba',
	1 => 'Chyby',
	2 => 'Chyb',
	3 => 'Chyb',
];
$a->strings['Tag(s) removed'] = 'Štítek(ky) odstraněn(y)';
$a->strings['Remove Item Tag'] = 'Odebrat štítek položky';
$a->strings['Select a tag to remove: '] = 'Vyberte štítek k odebrání: ';
$a->strings['User imports on closed servers can only be done by an administrator.'] = 'Importy uživatelů na uzavřených serverech může provést pouze administrátor.';
$a->strings['This site has exceeded the number of allowed daily account registrations. Please try again tomorrow.'] = 'Došlo k překročení maximálního povoleného počtu registrací za den na tomto serveru. Zkuste to  zítra znovu.';
$a->strings['Import'] = 'Import';
$a->strings['Move account'] = 'Přesunout účet';
$a->strings['You can import an account from another Friendica server.'] = 'Můžete importovat účet z jiného serveru Friendica.';
$a->strings['You need to export your account from the old server and upload it here. We will recreate your old account here with all your contacts. We will try also to inform your friends that you moved here.'] = 'Musíte exportovat svůj účet na starém serveru a nahrát ho zde. My následně vytvoříme Váš původní účet zde včetně všech kontaktů. Zároveň se pokusíme informovat všechny Vaše přátele, že jste se sem přestěhoval/a.';
$a->strings['This feature is experimental. We can\'t import contacts from the OStatus network (GNU Social/Statusnet) or from Diaspora'] = 'Tato vlastnost je experimentální. Nemůžeme importovat kontakty za sítě OStatus (GNU social/StatusNet) nebo z Diaspory';
$a->strings['Account file'] = 'Soubor s účtem';
$a->strings['To export your account, go to "Settings->Export your personal data" and select "Export account"'] = 'K exportu Vašeho účtu jděte na „Nastavení->Exportovat osobní údaje“ a zvolte „Exportovat účet“';
$a->strings['You aren\'t following this contact.'] = 'Tento kontakt nesledujete.';
$a->strings['Unfollowing is currently not supported by your network.'] = 'Zrušení sledování není aktuálně na Vaši síti podporováno.';
$a->strings['Contact unfollowed'] = 'Zrušeno sledování kontaktu';
$a->strings['Disconnect/Unfollow'] = 'Odpojit se/Zrušit sledování';
$a->strings['Your Identity Address:'] = 'Vaše adresa identity:';
$a->strings['Submit Request'] = 'Odeslat požadavek';
$a->strings['Profile URL'] = 'URL profilu';
$a->strings['Status Messages and Posts'] = 'Stavové zprávy a příspěvky ';
$a->strings['[Embedded content - reload page to view]'] = '[Vložený obsah - pro zobrazení obnovte stránku]';
$a->strings['Invalid request.'] = 'Neplatný požadavek.';
$a->strings['Sorry, maybe your upload is bigger than the PHP configuration allows'] = 'Omlouváme se, možná je váš soubor větší než je povolené maximum dle nastavení PHP';
$a->strings['Or - did you try to upload an empty file?'] = 'Nebo - nenahrával/a jste prázdný soubor?';
$a->strings['File exceeds size limit of %s'] = 'Velikost souboru přesáhla limit %s';
$a->strings['File upload failed.'] = 'Nahrání souboru se nezdařilo.';
$a->strings['Image exceeds size limit of %s'] = 'Velikost obrázku překročila limit %s';
$a->strings['Unable to process image.'] = 'Obrázek není možné zprocesovat';
$a->strings['Wall Photos'] = 'Fotky na zdi';
$a->strings['Image upload failed.'] = 'Nahrání obrázku selhalo.';
$a->strings['Number of daily wall messages for %s exceeded. Message failed.'] = 'Došlo k překročení maximálního počtu zpráv na zeď během jednoho dne. Zpráva %s nedoručena.';
$a->strings['No recipient selected.'] = 'Nevybrán příjemce.';
$a->strings['Unable to check your home location.'] = 'Nebylo možné zjistit polohu vašeho domova.';
$a->strings['Message could not be sent.'] = 'Zprávu se nepodařilo odeslat.';
$a->strings['Message collection failure.'] = 'Sběr zpráv selhal.';
$a->strings['Message sent.'] = 'Zpráva odeslána.';
$a->strings['No recipient.'] = 'Žádný příjemce.';
$a->strings['Please enter a link URL:'] = 'Zadejte prosím URL odkaz:';
$a->strings['Send Private Message'] = 'Odeslat soukromou zprávu';
$a->strings['If you wish for %s to respond, please check that the privacy settings on your site allow private mail from unknown senders.'] = 'Pokud si přejete, aby uživatel %s mohl odpovědět, ověřte si zda-li máte povoleno na svém serveru zasílání soukromých zpráv od neznámých odesilatelů.';
$a->strings['To:'] = 'Adresát:';
$a->strings['Subject:'] = 'Předmět:';
$a->strings['Your message:'] = 'Vaše zpráva:';
$a->strings['Insert web link'] = 'Vložit webový odkaz';
$a->strings['No keywords to match. Please add keywords to your default profile.'] = 'Žádná klíčová slova k porovnání. Prosím, přidejte klíčová slova do vašeho výchozího profilu.';
$a->strings['Connect'] = 'Spojit se';
$a->strings['first'] = 'první';
$a->strings['next'] = 'další';
$a->strings['No matches'] = 'Žádné shody';
$a->strings['Profile Match'] = 'Shoda profilu';
$a->strings['Profile not found.'] = 'Profil nenalezen.';
$a->strings['Profile deleted.'] = 'Profil smazán.';
$a->strings['Profile-'] = 'Profil-';
$a->strings['New profile created.'] = 'Nový profil vytvořen.';
$a->strings['Profile unavailable to clone.'] = 'Profil není možné naklonovat.';
$a->strings['Profile Name is required.'] = 'Jméno profilu je povinné.';
$a->strings['Marital Status'] = 'Rodinný stav';
$a->strings['Romantic Partner'] = 'Romatický partner';
$a->strings['Work/Employment'] = 'Práce/Zaměstnání';
$a->strings['Religion'] = 'Náboženství';
$a->strings['Political Views'] = 'Politické přesvědčení';
$a->strings['Gender'] = 'Pohlaví';
$a->strings['Sexual Preference'] = 'Sexuální orientace';
$a->strings['XMPP'] = 'XMPP';
$a->strings['Homepage'] = 'Domovská stránka';
$a->strings['Interests'] = 'Zájmy';
$a->strings['Address'] = 'Adresa';
$a->strings['Location'] = 'Poloha';
$a->strings['Profile updated.'] = 'Profil aktualizován.';
$a->strings['Hide contacts and friends:'] = 'Skrýt kontakty a přátele:';
$a->strings['Hide your contact/friend list from viewers of this profile?'] = 'Skrýt u tohoto profilu vaše kontakty/seznam přátel před před dalšími uživateli zobrazující si tento profil?';
$a->strings['Show more profile fields:'] = 'Zobrazit další profilová pole';
$a->strings['Profile Actions'] = 'Akce profilu';
$a->strings['Edit Profile Details'] = 'Upravit podrobnosti profilu ';
$a->strings['Submit'] = 'Odeslat';
$a->strings['Change Profile Photo'] = 'Změnit profilovou fotku';
$a->strings['View this profile'] = 'Zobrazit tento profil';
$a->strings['View all profiles'] = 'Zobrazit všechny profily';
$a->strings['Edit visibility'] = 'Upravit viditelnost';
$a->strings['Create a new profile using these settings'] = 'Vytvořit nový profil pomocí tohoto nastavení';
$a->strings['Clone this profile'] = 'Klonovat tento profil';
$a->strings['Delete this profile'] = 'Smazat tento profil';
$a->strings['Basic information'] = 'Základní informace';
$a->strings['Profile picture'] = 'Profilový obrázek';
$a->strings['Preferences'] = 'Nastavení';
$a->strings['Status information'] = 'Informace o stavu';
$a->strings['Additional information'] = 'Dodatečné informace';
$a->strings['Personal'] = 'Osobní';
$a->strings['Relation'] = 'Vztah';
$a->strings['Miscellaneous'] = 'Různé';
$a->strings['Upload Profile Photo'] = 'Nahrát profilovou fotku';
$a->strings['Your Gender:'] = 'Vaše pohlaví:';
$a->strings['<span class="heart">&hearts;</span> Marital Status:'] = '<span class="heart">&hearts;</span> Rodinný stav:';
$a->strings['Sexual Preference:'] = 'Sexuální orientace:';
$a->strings['Example: fishing photography software'] = 'Příklad: rybaření fotografování software';
$a->strings['Profile Name:'] = 'Jméno profilu:';
$a->strings['Required'] = 'Vyžadováno';
$a->strings['This is your <strong>public</strong> profile.<br />It <strong>may</strong> be visible to anybody using the internet.'] = 'Toto je váš <strong>veřejný</strong> profil.<br />Ten <strong>může</strong> být viditelný kýmkoliv na internetu.';
$a->strings['Your Full Name:'] = 'Vaše celé jméno:';
$a->strings['Title/Description:'] = 'Název / Popis:';
$a->strings['Street Address:'] = 'Ulice:';
$a->strings['Locality/City:'] = 'Poloha/město:';
$a->strings['Region/State:'] = 'Region / stát:';
$a->strings['Postal/Zip Code:'] = 'PSČ:';
$a->strings['Country:'] = 'Země:';
$a->strings['Age: '] = 'Věk: ';
$a->strings['Who: (if applicable)'] = 'Kdo: (pokud je možné)';
$a->strings['Examples: cathy123, Cathy Williams, cathy@example.com'] = 'Příklady: jan123, Jan Novák, jan@priklad.cz';
$a->strings['Since [date]:'] = 'Od [data]:';
$a->strings['Tell us about yourself...'] = 'Řekněte nám něco o sobě...';
$a->strings['XMPP (Jabber) address:'] = 'Adresa XMPP (Jabber):';
$a->strings['The XMPP address will be propagated to your contacts so that they can follow you.'] = 'Adresa XMPP bude rozšířena mezi vašimi kontakty, aby vás mohly sledovat.';
$a->strings['Homepage URL:'] = 'Odkaz na domovskou stránku:';
$a->strings['Hometown:'] = 'Rodné město:';
$a->strings['Political Views:'] = 'Politické přesvědčení:';
$a->strings['Religious Views:'] = 'Náboženské přesvědčení:';
$a->strings['Public Keywords:'] = 'Veřejná klíčová slova:';
$a->strings['(Used for suggesting potential friends, can be seen by others)'] = '(Používá se pro doporučování potenciálních přátel, může být viděno ostatními)';
$a->strings['Private Keywords:'] = 'Soukromá klíčová slova:';
$a->strings['(Used for searching profiles, never shown to others)'] = '(Používá se pro vyhledávání profilů, není nikdy zobrazeno ostatním)';
$a->strings['Likes:'] = 'Líbí se:';
$a->strings['Dislikes:'] = 'Nelibí se:';
$a->strings['Musical interests'] = 'Hudební vkus';
$a->strings['Books, literature'] = 'Knihy, literatura';
$a->strings['Television'] = 'Televize';
$a->strings['Film/dance/culture/entertainment'] = 'Film/tanec/kultura/zábava';
$a->strings['Hobbies/Interests'] = 'Koníčky/zájmy';
$a->strings['Love/romance'] = 'Láska/romantika';
$a->strings['Work/employment'] = 'Práce/zaměstnání';
$a->strings['School/education'] = 'Škola/vzdělání';
$a->strings['Contact information and Social Networks'] = 'Kontaktní informace a sociální sítě';
$a->strings['Profile Image'] = 'Profilový obrázek';
$a->strings['visible to everybody'] = 'viditelné pro všechny';
$a->strings['Edit/Manage Profiles'] = 'Upravit/spravovat profily';
$a->strings['Change profile photo'] = 'Změnit profilovou fotku';
$a->strings['Create New Profile'] = 'Vytvořit nový profil';
$a->strings['Access denied.'] = 'Přístup odmítnut.';
$a->strings['Access to this profile has been restricted.'] = 'Přístup na tento profil byl omezen.';
$a->strings['Events'] = 'Události';
$a->strings['View'] = 'Zobrazit';
$a->strings['Previous'] = 'Předchozí';
$a->strings['Next'] = 'Dále';
$a->strings['today'] = 'dnes';
$a->strings['month'] = 'měsíc';
$a->strings['week'] = 'týden';
$a->strings['day'] = 'den';
$a->strings['list'] = 'seznam';
$a->strings['User not found'] = 'Uživatel nenalezen.';
$a->strings['This calendar format is not supported'] = 'Tento formát kalendáře není podporován.';
$a->strings['No exportable data found'] = 'Nenalezena žádná data pro export';
$a->strings['calendar'] = 'kalendář';
$a->strings['No contacts in common.'] = 'Žádné společné kontakty.';
$a->strings['Common Friends'] = 'Společní přátelé';
$a->strings['Public access denied.'] = 'Veřejný přístup odepřen.';
$a->strings['Community option not available.'] = 'Možnost komunity není dostupná.';
$a->strings['Not available.'] = 'Není k dispozici.';
$a->strings['Local Community'] = 'Místní komunita';
$a->strings['Posts from local users on this server'] = 'Příspěvky od místních uživatelů na tomto serveru';
$a->strings['Global Community'] = 'Globální komunita';
$a->strings['Posts from users of the whole federated network'] = 'Příspěvky od uživatelů z celé federované sítě';
$a->strings['No results.'] = 'Žádné výsledky.';
$a->strings['This community stream shows all public posts received by this node. They may not reflect the opinions of this node’s users.'] = 'Tento komunitní proud ukazuje všechny veřejné příspěvky, které tento server přijme. Nemusí odrážet názory uživatelů serveru.';
$a->strings['Contact settings applied.'] = 'Nastavení kontaktu změněno';
$a->strings['Contact update failed.'] = 'Aktualizace kontaktu selhala.';
$a->strings['Contact not found.'] = 'Kontakt nenalezen.';
$a->strings['<strong>WARNING: This is highly advanced</strong> and if you enter incorrect information your communications with this contact may stop working.'] = '<strong>VAROVÁNÍ: Toto je velmi pokročilé</strong> a pokud zadáte nesprávné informace, vaše komunikace s tímto kontaktem může přestat fungovat.';
$a->strings['Please use your browser \'Back\' button <strong>now</strong> if you are uncertain what to do on this page.'] = 'Prosím použijte <strong>ihned</strong> v prohlížeči tlačítko „zpět“ pokud si nejste jisti, co dělat na této stránce.';
$a->strings['No mirroring'] = 'Žádné zrcadlení';
$a->strings['Mirror as forwarded posting'] = 'Zrcadlit pro přeposlané příspěvky';
$a->strings['Mirror as my own posting'] = 'Zrcadlit jako mé vlastní příspěvky';
$a->strings['Return to contact editor'] = 'Zpět k editoru kontaktu';
$a->strings['Refetch contact data'] = 'Znovu načíst data kontaktu';
$a->strings['Remote Self'] = 'Vzdálené zrcadlení';
$a->strings['Mirror postings from this contact'] = 'Zrcadlení příspěvků od tohoto kontaktu';
$a->strings['Mark this contact as remote_self, this will cause friendica to repost new entries from this contact.'] = 'Označit tento kontakt jako „remote_self“, s tímto nastavením bude Friendica znovupublikovat všechny nové příspěvky od tohoto kontaktu.';
$a->strings['Name'] = 'Jméno';
$a->strings['Account Nickname'] = 'Přezdívka účtu';
$a->strings['@Tagname - overrides Name/Nickname'] = '@jménoštítku- upřednostněno před jménem/přezdívkou';
$a->strings['Account URL'] = 'URL adresa účtu';
$a->strings['Account URL Alias'] = 'Alias URL adresy účtu';
$a->strings['Friend Request URL'] = 'URL požadavku o přátelství';
$a->strings['Friend Confirm URL'] = 'URL adresa pro potvrzení přátelství';
$a->strings['Notification Endpoint URL'] = 'URL adresa koncového bodu oznámení';
$a->strings['Poll/Feed URL'] = 'URL adresa poll/feed';
$a->strings['New photo from this URL'] = 'Nová fotka z této URL adresy';
$a->strings['This may occasionally happen if contact was requested by both persons and it has already been approved.'] = 'To se může občas stát, pokud bylo o kontaktování požádáno oběma osobami a již bylo schváleno.';
$a->strings['Response from remote site was not understood.'] = 'Odpověď ze vzdáleného serveru nebyla srozumitelná.';
$a->strings['Unexpected response from remote site: '] = 'Neočekávaná odpověď od vzdáleného serveru:';
$a->strings['Confirmation completed successfully.'] = 'Potvrzení úspěšně dokončena.';
$a->strings['Temporary failure. Please wait and try again.'] = 'Dočasné selhání. Prosím, vyčkejte a zkuste to znovu.';
$a->strings['Introduction failed or was revoked.'] = 'Žádost o propojení selhala nebo byla zrušena.';
$a->strings['Remote site reported: '] = 'Vzdálený server oznámil:';
$a->strings['No user record found for \'%s\' '] = 'Pro „%s“ nenalezen žádný uživatelský záznam ';
$a->strings['Our site encryption key is apparently messed up.'] = 'Náš šifrovací klíč zřejmě přestal správně fungovat.';
$a->strings['Empty site URL was provided or URL could not be decrypted by us.'] = 'Byla poskytnuta prázdná URL adresa nebo se nepodařilo URL adresu dešifrovat.';
$a->strings['Contact record was not found for you on our site.'] = 'Záznam kontaktu pro vás nebyl na našich stránkách nalezen.';
$a->strings['Site public key not available in contact record for URL %s.'] = 'V adresáři není k dispozici veřejný klíč pro URL %s.';
$a->strings['The ID provided by your system is a duplicate on our system. It should work if you try again.'] = 'ID poskytnuté vaším systémem je duplikát ID na našem systému. Mělo by fungovat, pokud to zkusíte znovu.';
$a->strings['Unable to set your contact credentials on our system.'] = 'Nelze nastavit vaše přihlašovací údaje v našem systému.';
$a->strings['Unable to update your contact profile details on our system'] = 'Nelze aktualizovat váš profil v našem systému';
$a->strings['[Name Withheld]'] = '[Jméno odepřeno]';
$a->strings['%1$s welcomes %2$s'] = '%1$s vítá uživatele %2$s';
$a->strings['This introduction has already been accepted.'] = 'Toto pozvání již bylo přijato.';
$a->strings['Profile location is not valid or does not contain profile information.'] = 'Adresa profilu není platná nebo neobsahuje profilové informace';
$a->strings['Warning: profile location has no identifiable owner name.'] = 'Varování: umístění profilu nemá žádné identifikovatelné jméno vlastníka';
$a->strings['Warning: profile location has no profile photo.'] = 'Varování: umístění profilu nemá žádnou profilovou fotku.';
$a->strings['%d required parameter was not found at the given location'] = [
	0 => '%d požadovaný parametr nebyl nalezen na daném umístění',
	1 => '%d požadované parametry nebyly nalezeny na daném umístění',
	2 => '%d požadovaného parametru nebylo nalezeno na daném umístění',
	3 => '%d požadovaných parametrů nebylo nalezeno na daném umístění',
];
$a->strings['Introduction complete.'] = 'Představení dokončeno.';
$a->strings['Unrecoverable protocol error.'] = 'Neopravitelná chyba protokolu';
$a->strings['Profile unavailable.'] = 'Profil není k dispozici.';
$a->strings['%s has received too many connection requests today.'] = '%s dnes obdržel/a příliš mnoho požadavků o spojení.';
$a->strings['Spam protection measures have been invoked.'] = 'Ochrana proti spamu byla aktivována';
$a->strings['Friends are advised to please try again in 24 hours.'] = 'Přátelům se doporučuje to zkusit znovu za 24 hodin.';
$a->strings['Invalid locator'] = 'Neplatný odkaz';
$a->strings['You have already introduced yourself here.'] = 'Již jste se zde představil/a.';
$a->strings['Apparently you are already friends with %s.'] = 'Zřejmě jste s %s již přátelé.';
$a->strings['Invalid profile URL.'] = 'Neplatné URL profilu.';
$a->strings['Disallowed profile URL.'] = 'Nepovolené URL profilu.';
$a->strings['Blocked domain'] = 'Zablokovaná doména';
$a->strings['Failed to update contact record.'] = 'Nepodařilo se aktualizovat kontakt.';
$a->strings['Your introduction has been sent.'] = 'Vaše představení bylo odesláno.';
$a->strings['Remote subscription can\'t be done for your network. Please subscribe directly on your system.'] = 'Vzdálený odběr nemůže být na vaší síti proveden. Prosím, přihlaste se k odběru přímo na vašem systému.';
$a->strings['Please login to confirm introduction.'] = 'Pro potvrzení představení se prosím přihlaste.';
$a->strings['Incorrect identity currently logged in. Please login to <strong>this</strong> profile.'] = 'Jste přihlášen/a pod nesprávnou identitou. Prosím, přihlaste se do <strong>tohoto</strong> profilu.';
$a->strings['Confirm'] = 'Potvrdit';
$a->strings['Hide this contact'] = 'Skrýt tento kontakt';
$a->strings['Welcome home %s.'] = 'Vítejte doma, %s.';
$a->strings['Please confirm your introduction/connection request to %s.'] = 'Prosím potvrďte váš požadavek o spojení uživateli %s.';
$a->strings['Please enter your \'Identity Address\' from one of the following supported communications networks:'] = 'Prosím zadejte vaši „adresu identity“ jedné z následujících podporovaných komunikačních sítí:';
$a->strings['If you are not yet a member of the free social web, <a href="%s">follow this link to find a public Friendica site and join us today</a>.'] = 'Pokud ještě nejste členem svobodného sociálního webu, <a href="%s">klikněte na tento odkaz, najděte si veřejný server Friendica a připojte se k nám ještě dnes</a>.';
$a->strings['Friend/Connection Request'] = 'Požadavek o přátelství/spojení';
$a->strings['Examples: jojo@demo.friendica.com, http://demo.friendica.com/profile/jojo, testuser@gnusocial.de'] = 'Příklady: jojo@demo.friendica.com, http://demo.friendica.com/profile/jojo, testuser@gnusocial.de';
$a->strings['Please answer the following:'] = 'Odpovězte, prosím, následující:';
$a->strings['Does %s know you?'] = 'Zná vás %s?';
$a->strings['Add a personal note:'] = 'Přidejte osobní poznámku:';
$a->strings['Friendica'] = 'Friendica';
$a->strings['GNU Social (Pleroma, Mastodon)'] = 'GNU social (Pleroma, Mastodon)';
$a->strings['Diaspora (Socialhome, Hubzilla)'] = 'Diaspora (Socialhome, Hubzilla)';
$a->strings[' - please do not use this form.  Instead, enter %s into your Diaspora search bar.'] = ' - prosím nepoužívejte tento formulář.  Místo toho zadejte do vašeho vyhledávacího pole Diaspora %s.';
$a->strings['Item not found'] = 'Položka nenalezena';
$a->strings['Edit post'] = 'Upravit příspěvek';
$a->strings['Save'] = 'Uložit';
$a->strings['web link'] = 'webový odkaz';
$a->strings['Insert video link'] = 'Vložit odkaz na video';
$a->strings['video link'] = 'odkaz na video';
$a->strings['Insert audio link'] = 'Vložit odkaz na audio';
$a->strings['audio link'] = 'odkaz na audio';
$a->strings['CC: email addresses'] = 'Kopie: e-mailové adresy';
$a->strings['Example: bob@example.com, mary@example.com'] = 'Příklad: jan@priklad.cz, lucie@priklad.cz';
$a->strings['Photos'] = 'Fotky';
$a->strings['Contact Photos'] = 'Fotky kontaktu';
$a->strings['Upload'] = 'Nahrát';
$a->strings['Files'] = 'Soubory';
$a->strings['The contact could not be added.'] = 'Kontakt nemohl být přidán.';
$a->strings['You already added this contact.'] = 'Již jste si tento kontakt přidal/a';
$a->strings['Diaspora support isn\'t enabled. Contact can\'t be added.'] = 'Podpora pro Diasporu není zapnuta. Kontakt nemůže být přidán.';
$a->strings['OStatus support is disabled. Contact can\'t be added.'] = 'Podpora pro OStatus je vypnnuta. Kontakt nemůže být přidán.';
$a->strings['The network type couldn\'t be detected. Contact can\'t be added.'] = 'Typ sítě nemohl být detekován. Kontakt nemůže být přidán.';
$a->strings['Tags:'] = 'Štítky:';
$a->strings['Suggested contact not found.'] = 'Navrhovaný kontakt nenalezen.';
$a->strings['Friend suggestion sent.'] = 'Návrh přátelství odeslán. ';
$a->strings['Suggest Friends'] = 'Navrhnout přátele';
$a->strings['Suggest a friend for %s'] = 'Navrhnout přítele pro uživatele %s';
$a->strings['No profile'] = 'Žádný profil';
$a->strings['Remote privacy information not available.'] = 'Vzdálené informace o soukromí nejsou k dispozici.';
$a->strings['Visible to:'] = 'Viditelné pro:';
$a->strings['Followers'] = 'Sledovaní';
$a->strings['Mutuals'] = 'Vzájemní';
$a->strings['No valid account found.'] = 'Nenalezen žádný platný účet.';
$a->strings['Password reset request issued. Check your email.'] = 'Požadavek o obnovení hesla vyřízen. Zkontrolujte Vaši e-mailovou schránku.';
$a->strings['
		Dear %1$s,
			A request was recently received at "%2$s" to reset your account
		password. In order to confirm this request, please select the verification link
		below or paste it into your web browser address bar.

		If you did NOT request this change, please DO NOT follow the link
		provided and ignore and/or delete this email, the request will expire shortly.

		Your password will not be changed unless we can verify that you
		issued this request.'] = '
		Vážený/á %1$s,
			Před nedávnem jsme obdrželi na „%2$s“ požadavek o obnovení
		hesla k vašemu účtu. Pro potvrzení tohoto požadavku, prosím klikněte na odkaz
		pro ověření dole, nebo ho zkopírujte do adresního řádku vašeho prohlížeče.

		Pokud jste o tuto změnu NEPOŽÁDAL/A, prosím NEKLIKEJTE na tento odkaz
		a ignorujte a/nebo smažte tento e-mail. Platnost požadavku brzy vyprší.

		Vaše heslo nebude změněno, dokud nedokážeme ověřit, že jste tento
		požadavek nevydal/a vy.';
$a->strings['
		Follow this link soon to verify your identity:

		%1$s

		You will then receive a follow-up message containing the new password.
		You may change that password from your account settings page after logging in.

		The login details are as follows:

		Site Location:	%2$s
		Login Name:	%3$s'] = '
		Klikněte na tento odkaz brzy pro ověření vaší identity:

		%1$s

		Obdržíte poté následnou zprávu obsahující nové heslo.
		Po přihlášení můžete toto heslo změnit na stránce nastavení vašeho účtu.

		Zde jsou vaše přihlašovací detaily:

		Adresa stránky:		%2$s
		Přihlašovací jméno:	%3$s';
$a->strings['Password reset requested at %s'] = 'Na %s bylo požádáno o obnovení hesla';
$a->strings['Request could not be verified. (You may have previously submitted it.) Password reset failed.'] = 'Požadavek nemohl být ověřen. (Možná jste jej odeslal/a již dříve.) Obnovení hesla se nezdařilo.';
$a->strings['Request has expired, please make a new one.'] = 'Platnost požadavku vypršela, prosím vytvořte nový.';
$a->strings['Forgot your Password?'] = 'Zapomněl/a jste heslo?';
$a->strings['Enter your email address and submit to have your password reset. Then check your email for further instructions.'] = 'Zadejte svůj e-mailovou adresu a odešlete pro obnovení vašeho hesla. Poté zkontrolujte svůj e-mail pro další instrukce.';
$a->strings['Nickname or Email: '] = 'Přezdívka nebo e-mail: ';
$a->strings['Reset'] = 'Obnovit';
$a->strings['Password Reset'] = 'Obnovit heslo';
$a->strings['Your password has been reset as requested.'] = 'Vaše heslo bylo na vaše přání obnoveno.';
$a->strings['Your new password is'] = 'Někdo vám napsal na vaši profilovou stránku';
$a->strings['Save or copy your new password - and then'] = 'Uložte si nebo zkopírujte nové heslo - a pak';
$a->strings['click here to login'] = 'klikněte zde pro přihlášení';
$a->strings['Your password may be changed from the <em>Settings</em> page after successful login.'] = 'Nezdá se, že by to bylo vaše celé jméno (křestní jméno a příjmení).';
$a->strings['
			Dear %1$s,
				Your password has been changed as requested. Please retain this
			information for your records (or change your password immediately to
			something that you will remember).
		'] = '
			Vážený/á %1$s,
				Vaše heslo bylo změněno, jak jste požádal/a. Prosím uchovejte
			tyto informace pro vaše záznamy (nebo si ihned změňte heslo na něco,
			co si zapamatujete).
		';
$a->strings['
			Your login details are as follows:

			Site Location:	%1$s
			Login Name:	%2$s
			Password:	%3$s

			You may change that password from your account settings page after logging in.
		'] = '
			Zde jsou vaše přihlašovací detaily:

			Adresa stránky:		%1$s
			Přihlašovací jméno:	%2$s
			Heslo:			%3$s

			Toto heslo si po přihlášení můžete změnit na stránce nastavení Vašeho účtu.
		';
$a->strings['Your password has been changed at %s'] = 'Vaše heslo bylo změněno na %s';
$a->strings['Manage Identities and/or Pages'] = 'Správa identit a/nebo stránek';
$a->strings['Toggle between different identities or community/group pages which share your account details or which you have been granted "manage" permissions'] = 'Přepínání mezi různými identitami nebo komunitními/skupinovými stránkami, které sdílí vaše detaily účtu, nebo kterým jste přidělil/a oprávnění nastavovat přístupová práva.';
$a->strings['Select an identity to manage: '] = 'Vyberte identitu ke spravování: ';
$a->strings['New Message'] = 'Nová zpráva';
$a->strings['Unable to locate contact information.'] = 'Nepodařilo se najít kontaktní informace.';
$a->strings['Discard'] = 'Odstranit';
$a->strings['Messages'] = 'Zprávy';
$a->strings['Do you really want to delete this message?'] = 'Opravdu chcete smazat tuto zprávu?';
$a->strings['Conversation not found.'] = 'Konverzace nenalezena.';
$a->strings['Message deleted.'] = 'Zpráva odstraněna.';
$a->strings['Conversation removed.'] = 'Konverzace odstraněna.';
$a->strings['No messages.'] = 'Žádné zprávy.';
$a->strings['Message not available.'] = 'Zpráva není k dispozici.';
$a->strings['Delete message'] = 'Smazat zprávu';
$a->strings['D, d M Y - g:i A'] = 'D d. M Y - g:i A';
$a->strings['Delete conversation'] = 'Odstranit konverzaci';
$a->strings['No secure communications available. You <strong>may</strong> be able to respond from the sender\'s profile page.'] = 'Není k dispozici zabezpečená komunikace. <strong>Možná</strong> budete schopen/na reagovat z odesílatelovy profilové stránky.';
$a->strings['Send Reply'] = 'Poslat odpověď';
$a->strings['Unknown sender - %s'] = 'Neznámý odesilatel - %s';
$a->strings['You and %s'] = 'Vy a %s';
$a->strings['%s and You'] = '%s a vy';
$a->strings['%d message'] = [
	0 => '%d zpráva',
	1 => '%d zprávy',
	2 => '%d zprávy',
	3 => '%d zpráv',
];
$a->strings['Remove term'] = 'Odstranit termín';
$a->strings['Saved Searches'] = 'Uložená hledání';
$a->strings['add'] = 'přidat';
$a->strings['Warning: This group contains %s member from a network that doesn\'t allow non public messages.'] = [
	0 => 'Varování: Tato skupina obsahuje %s člena ze sítě, která nepovoluje posílání soukromých zpráv.',
	1 => 'Varování: Tato skupina obsahuje %s členy ze sítě, která nepovoluje posílání soukromých zpráv.',
	2 => 'Varování: Tato skupina obsahuje %s člena ze sítě, která nepovoluje posílání soukromých zpráv.',
	3 => 'Varování: Tato skupina obsahuje %s členů ze sítě, která nepovoluje posílání soukromých zpráv.',
];
$a->strings['Messages in this group won\'t be send to these receivers.'] = 'Zprávy v této skupině nebudou těmto příjemcům doručeny.';
$a->strings['No such group'] = 'Žádná taková skupina';
$a->strings['Group is empty'] = 'Skupina je prázdná';
$a->strings['Group: %s'] = 'Skupina: %s';
$a->strings['Private messages to this person are at risk of public disclosure.'] = 'Soukromé zprávy této osobě jsou vystaveny riziku prozrazení.';
$a->strings['Invalid contact.'] = 'Neplatný kontakt.';
$a->strings['Commented Order'] = 'Dle komentářů';
$a->strings['Sort by Comment Date'] = 'Řadit podle data komentáře';
$a->strings['Posted Order'] = 'Dle data';
$a->strings['Sort by Post Date'] = 'Řadit podle data příspěvku';
$a->strings['Posts that mention or involve you'] = 'Příspěvky, které vás zmiňují nebo zahrnují';
$a->strings['New'] = 'Nové';
$a->strings['Activity Stream - by date'] = 'Proud aktivit - dle data';
$a->strings['Shared Links'] = 'Sdílené odkazy';
$a->strings['Interesting Links'] = 'Zajímavé odkazy';
$a->strings['Starred'] = 'S hvězdou';
$a->strings['Favourite Posts'] = 'Oblíbené přízpěvky';
$a->strings['Personal Notes'] = 'Osobní poznámky';
$a->strings['Photo Albums'] = 'Fotoalba';
$a->strings['Recent Photos'] = 'Nedávné fotky';
$a->strings['Upload New Photos'] = 'Nahrát nové fotky';
$a->strings['everybody'] = 'Žádost o připojení selhala nebo byla zrušena.';
$a->strings['Contact information unavailable'] = 'Kontakt byl zablokován';
$a->strings['Album not found.'] = 'Album nenalezeno.';
$a->strings['Album successfully deleted'] = 'Album úspěšně smazáno';
$a->strings['Album was empty.'] = 'Album bylo prázdné.';
$a->strings['a photo'] = 'fotce';
$a->strings['%1$s was tagged in %2$s by %3$s'] = '%1$s byl označen ve %2$s uživatelem %3$s';
$a->strings['Image upload didn\'t complete, please try again'] = 'Nahrávání obrázku nebylo dokončeno, zkuste to prosím znovu';
$a->strings['Image file is missing'] = 'Chybí soubor obrázku';
$a->strings['Server can\'t accept new file upload at this time, please contact your administrator'] = 'Server v tuto chvíli nemůže akceptovat nové nahrané soubory, prosím kontaktujte vašeho administrátora';
$a->strings['Image file is empty.'] = 'Soubor obrázku je prázdný.';
$a->strings['No photos selected'] = 'Není vybrána žádná fotka';
$a->strings['Access to this item is restricted.'] = 'Přístup k této položce je omezen.';
$a->strings['Upload Photos'] = 'Nahrát fotky';
$a->strings['New album name: '] = 'Název nového alba: ';
$a->strings['or select existing album:'] = 'nebo si vyberte existující album:';
$a->strings['Do not show a status post for this upload'] = 'Nezobrazovat pro toto nahrání stavovou zprávu';
$a->strings['Permissions'] = 'Oprávnění';
$a->strings['Show to Groups'] = 'Zobrazit ve Skupinách';
$a->strings['Show to Contacts'] = 'Zobrazit v Kontaktech';
$a->strings['Do you really want to delete this photo album and all its photos?'] = 'Opravdu chcete smazat toto fotoalbum a všechny jeho fotky?';
$a->strings['Delete Album'] = 'Smazat album';
$a->strings['Edit Album'] = 'Upravit album';
$a->strings['Drop Album'] = 'Smazat album';
$a->strings['Show Newest First'] = 'Zobrazit nejprve nejnovější';
$a->strings['Show Oldest First'] = 'Zobrazit nejprve nejstarší';
$a->strings['View Photo'] = 'Zobrazit fotku';
$a->strings['Permission denied. Access to this item may be restricted.'] = 'Oprávnění bylo zamítnuto. Přístup k této položce může být omezen.';
$a->strings['Photo not available'] = 'Fotka není k dispozici';
$a->strings['Do you really want to delete this photo?'] = 'Opravdu chcete smazat tuto fotku?';
$a->strings['Delete Photo'] = 'Smazat fotku';
$a->strings['View photo'] = 'Zobrazit fotku';
$a->strings['Edit photo'] = 'Upravit fotku';
$a->strings['Delete photo'] = 'Smazat fotku';
$a->strings['Use as profile photo'] = 'Použít jako profilovou fotku';
$a->strings['Private Photo'] = 'Soukromá fotka';
$a->strings['View Full Size'] = 'Zobrazit v plné velikosti';
$a->strings['Tags: '] = 'Štítky: ';
$a->strings['[Select tags to remove]'] = '[Vyberte štítky pro odstranění]';
$a->strings['New album name'] = 'Nové jméno alba';
$a->strings['Caption'] = 'Titulek';
$a->strings['Add a Tag'] = 'Přidat štítek';
$a->strings['Example: @bob, @Barbara_Jensen, @jim@example.com, #California, #camping'] = 'Příklad: @jan, @Lucie_Nováková, @jakub@priklad.cz, #Morava, #taboreni';
$a->strings['Do not rotate'] = 'Neotáčet';
$a->strings['Rotate CW (right)'] = 'Otáčet po směru hodinových ručiček (doprava)';
$a->strings['Rotate CCW (left)'] = 'Otáčet proti směru hodinových ručiček (doleva)';
$a->strings['I like this (toggle)'] = 'To se mi líbí (přepínat)';
$a->strings['I don\'t like this (toggle)'] = 'To se mi nelíbí (přepínat)';
$a->strings['This is you'] = 'Tohle jste vy';
$a->strings['Comment'] = 'Okomentovat';
$a->strings['Map'] = 'Mapa';
$a->strings['View Album'] = 'Zobrazit album';
$a->strings['{0} wants to be your friend'] = '{0} chce být vaším přítelem';
$a->strings['{0} requested registration'] = '{0} požaduje registraci';
$a->strings['Poke/Prod'] = 'Šťouchnout/dloubnout';
$a->strings['poke, prod or do other things to somebody'] = 'někoho šťouchnout, dloubnout, nebo mu provést jinou věc';
$a->strings['Recipient'] = 'Příjemce';
$a->strings['Choose what you wish to do to recipient'] = 'Vyberte, co si přejete příjemci udělat';
$a->strings['Make this post private'] = 'Změnit tento příspěvek na soukromý';
$a->strings['Image uploaded but image cropping failed.'] = 'Obrázek byl odeslán, ale jeho oříznutí se nesdařilo.';
$a->strings['Image size reduction [%s] failed.'] = 'Nepodařilo se snížit velikost obrázku [%s].';
$a->strings['Shift-reload the page or clear browser cache if the new photo does not display immediately.'] = 'Znovu načtěte stránku (Shift+F5) nebo vymažte cache prohlížeče, pokud se nová fotka nezobrazí okamžitě.';
$a->strings['Unable to process image'] = 'Obrázek nelze zpracovat ';
$a->strings['Upload File:'] = 'Nahrát soubor:';
$a->strings['Select a profile:'] = 'Vybrat profil:';
$a->strings['or'] = 'nebo';
$a->strings['skip this step'] = 'tento krok přeskočte';
$a->strings['select a photo from your photo albums'] = 'si vyberte fotku z vašich fotoalb';
$a->strings['Crop Image'] = 'Oříznout obrázek';
$a->strings['Please adjust the image cropping for optimum viewing.'] = 'Prosím, ořízněte tento obrázek pro optimální zobrazení.';
$a->strings['Done Editing'] = 'Upravování dokončeno';
$a->strings['Image uploaded successfully.'] = 'Obrázek byl úspěšně nahrán.';
$a->strings['Only logged in users are permitted to perform a search.'] = 'Pouze přihlášení uživatelé mohou prohledávat tento server.';
$a->strings['Only one search per minute is permitted for not logged in users.'] = 'Nepřihlášení uživatelé mohou vyhledávat pouze jednou za minutu.';
$a->strings['Search'] = 'Hledat';
$a->strings['Items tagged with: %s'] = 'Položky označené štítkem: %s';
$a->strings['Results for: %s'] = 'Výsledky pro: %s';
$a->strings['%1$s is following %2$s\'s %3$s'] = '%1$s sleduje %3$s uživatele %2$s';
$a->strings['Contact suggestion successfully ignored.'] = 'Návrh kontaktu úspěšně ignorován.';
$a->strings['No suggestions available. If this is a new site, please try again in 24 hours.'] = 'Nejsou dostupné žádné návrhy. Pokud je toto nový server, zkuste to znovu za 24 hodin.';
$a->strings['Do you really want to delete this suggestion?'] = 'Opravdu chcete smazat tento návrh?';
$a->strings['Ignore/Hide'] = 'Ignorovat/skrýt';
$a->strings['Friend Suggestions'] = 'Návrhy přátel';
$a->strings['Export account'] = 'Exportovat účet';
$a->strings['Export your account info and contacts. Use this to make a backup of your account and/or to move it to another server.'] = 'Exportujte svůj účet a své kontakty. Použijte tuto funkci pro vytvoření  zálohy svého účtu a/nebo k přesunu na jiný server.';
$a->strings['Export all'] = 'Exportovat vše';
$a->strings['Export your accout info, contacts and all your items as json. Could be a very big file, and could take a lot of time. Use this to make a full backup of your account (photos are not exported)'] = 'Exportujte své informace o účtu, kontakty a všechny své položky jako JSON. To může být velmi velký soubor a může to zabrat spoustu času. Tuto funkci použijte pro úplnou zálohu svého účtu (fotky se neexportují)';
$a->strings['Export personal data'] = 'Exportovat osobní údaje';
$a->strings['No videos selected'] = 'Není vybráno žádné video';
$a->strings['View Video'] = 'Zobrazit video';
$a->strings['Recent Videos'] = 'Nedávná videa';
$a->strings['Upload New Videos'] = 'Nahrát nová videa';
$a->strings['The requested item doesn\'t exist or has been deleted.'] = 'Požadovaná položka neexistuje nebo byla smazána.';
$a->strings['The feed for this item is unavailable.'] = 'Proud pro tuto položku je nedostupný.';
$a->strings['Event can not end before it has started.'] = 'Událost nemůže končit dříve, než začala.';
$a->strings['Event title and start time are required.'] = 'Název události a datum začátku jsou vyžadovány.';
$a->strings['Create New Event'] = 'Vytvořit novou událost';
$a->strings['Event details'] = 'Detaily události';
$a->strings['Starting date and Title are required.'] = 'Počáteční datum a Název jsou vyžadovány.';
$a->strings['Event Starts:'] = 'Událost začíná:';
$a->strings['Finish date/time is not known or not relevant'] = 'Datum/čas konce není zadán nebo není relevantní';
$a->strings['Event Finishes:'] = 'Akce končí:';
$a->strings['Adjust for viewer timezone'] = 'Nastavit časové pásmo pro uživatele s právem pro čtení';
$a->strings['Description:'] = 'Popis:';
$a->strings['Location:'] = 'Poloha:';
$a->strings['Title:'] = 'Název:';
$a->strings['Share this event'] = 'Sdílet tuto událost';
$a->strings['Basic'] = 'Základní';
$a->strings['Advanced'] = 'Pokročilé';
$a->strings['Failed to remove event'] = 'Odstranění události selhalo';
$a->strings['Event removed'] = 'Událost odstraněna';
$a->strings['Unable to locate original post.'] = 'Nelze nalézt původní příspěvek.';
$a->strings['Empty post discarded.'] = 'Prázdný příspěvek odstraněn.';
$a->strings['This message was sent to you by %s, a member of the Friendica social network.'] = 'Tuto zprávu vám poslal/a %s, člen sociální sítě Friendica.';
$a->strings['You may visit them online at %s'] = 'Můžete jej/ji navštívit online na adrese %s';
$a->strings['Please contact the sender by replying to this post if you do not wish to receive these messages.'] = 'Pokud nechcete dostávat tyto zprávy, kontaktujte prosím odesílatele odpovědí na tuto zprávu.';
$a->strings['%s posted an update.'] = '%s poslal/a aktualizaci.';
$a->strings['Invalid request identifier.'] = 'Neplatný identifikátor požadavku.';
$a->strings['Notifications'] = 'Oznámení';
$a->strings['Network Notifications'] = 'Síťová oznámení';
$a->strings['System Notifications'] = 'Systémová oznámení';
$a->strings['Personal Notifications'] = 'Osobní oznámení';
$a->strings['Home Notifications'] = 'Oznámení na domovské stránce';
$a->strings['Show unread'] = 'Zobrazit nepřečtené';
$a->strings['Show all'] = 'Zobrazit vše';
$a->strings['Show Ignored Requests'] = 'Zobrazit ignorované požadavky';
$a->strings['Hide Ignored Requests'] = 'Skrýt ignorované požadavky';
$a->strings['Notification type:'] = 'Typ oznámení:';
$a->strings['Suggested by:'] = 'Navrhl/a:';
$a->strings['Hide this contact from others'] = 'Skrýt tento kontakt před ostatními';
$a->strings['Approve'] = 'Schválit';
$a->strings['Claims to be known to you: '] = 'Vaši údajní známí: ';
$a->strings['yes'] = 'ano';
$a->strings['no'] = 'ne';
$a->strings['Shall your connection be bidirectional or not?'] = 'Má vaše spojení být obousměrné, nebo ne?';
$a->strings['Accepting %s as a friend allows %s to subscribe to your posts, and you will also receive updates from them in your news feed.'] = 'Přijetí uživatele %s jako přítele dovolí uživateli %s odebírat Vaše příspěvky a Vy budete také přijímat aktualizace od něj ve Vašem kanále.';
$a->strings['Accepting %s as a subscriber allows them to subscribe to your posts, but you will not receive updates from them in your news feed.'] = 'Přijetí uživatele %s jako odběratele mu dovolí odebírat Vaše příspěvky, ale nebudete od něj přijímat aktualizace ve Vašem kanále.';
$a->strings['Accepting %s as a sharer allows them to subscribe to your posts, but you will not receive updates from them in your news feed.'] = 'Přijetí uživatele %s jako sdílejícího mu dovolí odebírat Vaše příspěvky, ale nebudete od něj přijímat aktualizace ve Vašem kanále.';
$a->strings['Friend'] = 'Přítel';
$a->strings['Sharer'] = 'Sdílející';
$a->strings['Subscriber'] = 'Odběratel';
$a->strings['About:'] = 'O mně:';
$a->strings['Gender:'] = 'Pohlaví:';
$a->strings['Network:'] = 'Síť:';
$a->strings['No introductions.'] = 'Žádné představení.';
$a->strings['No more %s notifications.'] = 'Žádná další %s oznámení';
$a->strings['OpenID protocol error. No ID returned.'] = 'Chyba OpenID protokolu. Nebylo navráceno žádné ID.';
$a->strings['Account not found and OpenID registration is not permitted on this site.'] = 'Nenalezen účet a OpenID registrace na tomto serveru není dovolena.';
$a->strings['Login failed.'] = 'Přihlášení se nezdařilo.';
$a->strings['Account'] = 'Účet';
$a->strings['Two-factor authentication'] = 'Dvoufázové ověřování';
$a->strings['Profiles'] = 'Profily';
$a->strings['Additional features'] = 'Dodatečné vlastnosti';
$a->strings['Display'] = 'Zobrazení';
$a->strings['Social Networks'] = 'Sociální sítě';
$a->strings['Addons'] = 'Doplňky';
$a->strings['Delegations'] = 'Delegace';
$a->strings['Connected apps'] = 'Připojené aplikace';
$a->strings['Remove account'] = 'Odstranit účet';
$a->strings['Settings'] = 'Nastavení';
$a->strings['Missing some important data!'] = 'Chybí některé důležité údaje!';
$a->strings['Update'] = 'Aktualizace';
$a->strings['Failed to connect with email account using the settings provided.'] = 'Nepodařilo se připojit k e-mailovému účtu pomocí dodaného nastavení.';
$a->strings['Email settings updated.'] = 'Nastavení e-mailu aktualizována.';
$a->strings['Features updated'] = 'Vlastnosti aktualizovány';
$a->strings['The theme you chose isn\'t available.'] = 'Motiv, který jste si vybral/a, není dostupný.';
$a->strings['Relocate message has been send to your contacts'] = 'Správa o změně umístění byla odeslána vašim kontaktům';
$a->strings['Passwords do not match.'] = 'Hasla se neshodují.';
$a->strings['Password update failed. Please try again.'] = 'Aktualizace hesla se nezdařila. Zkuste to prosím znovu.';
$a->strings['Password changed.'] = 'Heslo bylo změněno.';
$a->strings['Password unchanged.'] = 'Heslo nezměněno.';
$a->strings[' Please use a shorter name.'] = 'Prosím použijte kratší jméno.';
$a->strings[' Name too short.'] = 'Jméno je příliš krátké.';
$a->strings['Wrong Password'] = 'Špatné heslo';
$a->strings['Invalid email.'] = 'Neplatný e-mail.';
$a->strings['Cannot change to that email.'] = 'Nelze změnit na tento e-mail.';
$a->strings['Private forum has no privacy permissions. Using default privacy group.'] = 'Soukromé fórum nemá nastaveno zabezpečení. Používá se výchozí skupina soukromí.';
$a->strings['Private forum has no privacy permissions and no default privacy group.'] = 'Soukromé fórum nemá nastaveno zabezpečení a ani žádnou výchozí skupinu soukromí.';
$a->strings['Settings updated.'] = 'Nastavení aktualizováno.';
$a->strings['Add application'] = 'Přidat aplikaci';
$a->strings['Consumer Key'] = 'Consumer Key';
$a->strings['Consumer Secret'] = 'Consumer Secret';
$a->strings['Redirect'] = 'Přesměrování';
$a->strings['Icon url'] = 'URL ikony';
$a->strings['You can\'t edit this application.'] = 'Nemůžete upravit tuto aplikaci.';
$a->strings['Connected Apps'] = 'Připojené aplikace';
$a->strings['Edit'] = 'Upravit';
$a->strings['Client key starts with'] = 'Klienský klíč začíná';
$a->strings['No name'] = 'Bez názvu';
$a->strings['Remove authorization'] = 'Odstranit oprávnění';
$a->strings['No Addon settings configured'] = 'Žádná nastavení doplňků nenakonfigurována';
$a->strings['Addon Settings'] = 'Nastavení doplňků';
$a->strings['Off'] = 'Vyp';
$a->strings['On'] = 'Zap';
$a->strings['Additional Features'] = 'Dodatečné vlastnosti';
$a->strings['Diaspora'] = 'Diaspora';
$a->strings['enabled'] = 'povoleno';
$a->strings['disabled'] = 'zakázáno';
$a->strings['Built-in support for %s connectivity is %s'] = 'Vestavěná podpora pro připojení s %s je %s';
$a->strings['GNU Social (OStatus)'] = 'GNU social (OStatus)';
$a->strings['Email access is disabled on this site.'] = 'Přístup k e-mailu je na tomto serveru zakázán.';
$a->strings['General Social Media Settings'] = 'Obecná nastavení sociálních sítí';
$a->strings['Accept only top level posts by contacts you follow'] = 'Přijímat pouze příspěvky nejvyšší úrovně od kontaktů, které sledujete';
$a->strings['The system does an auto completion of threads when a comment arrives. This has got the side effect that you can receive posts that had been started by a non-follower but had been commented by someone you follow. This setting deactivates this behaviour. When activated, you strictly only will receive posts from people you really do follow.'] = 'Když přijde komentář, provede systém automatické doplňení vláken. Vedlejším účinkem je, že můžete obdržet příspěvky započaté někým, kdo vás nesleduje, ale okomentované někým, kdo vás sleduje. Toto nastavení toto chování vypne. Je-li aktivováno, obdržíte pouze příspěvky od lidí, které opravdu sledujete.';
$a->strings['Disable Content Warning'] = 'Vypnout varování o obsahu';
$a->strings['Users on networks like Mastodon or Pleroma are able to set a content warning field which collapse their post by default. This disables the automatic collapsing and sets the content warning as the post title. Doesn\'t affect any other content filtering you eventually set up.'] = 'Uživatelé na sítích, jako je Mastodon nebo Pleroma, si mohou nastavit pole s varováním o obsahu, která ve výchozím nastavení skryje jejich příspěvek. Tato možnost vypíná automatické skrývání a nastavuje varování o obsahu jako titulek příspěvku. Toto se netýká žádného dalšího filtrování obsahu, které se rozhodnete nastavit.';
$a->strings['Disable intelligent shortening'] = 'Vypnout inteligentní zkracování';
$a->strings['Normally the system tries to find the best link to add to shortened posts. If this option is enabled then every shortened post will always point to the original friendica post.'] = 'Normálně se systém snaží nalézt nejlepší odkaz pro přidání zkrácených příspěvků. Pokud je tato možnost aktivní, pak každý zkrácený příspěvek bude vždy ukazovat na originální příspěvek Friendica.';
$a->strings['Automatically follow any GNU Social (OStatus) followers/mentioners'] = 'Automaticky sledovat jakékoliv sledující/zmiňující na GNU social (OStatus) ';
$a->strings['If you receive a message from an unknown OStatus user, this option decides what to do. If it is checked, a new contact will be created for every unknown user.'] = 'Pokud obdržíte zprávu od neznámého uživatele z OStatus, tato možnost rozhoduje o tom, co dělat. Pokud je zaškrtnuta, bude pro každého neznámého uživatele vytvořen nový kontakt.';
$a->strings['Default group for OStatus contacts'] = 'Výchozí skupina pro kontakty z OStatus';
$a->strings['Your legacy GNU Social account'] = 'Váš starý účet na GNU social';
$a->strings['If you enter your old GNU Social/Statusnet account name here (in the format user@domain.tld), your contacts will be added automatically. The field will be emptied when done.'] = 'Pokud zde zadáte vaše staré jméno účtu na GNU social/StatusNet (ve formátu uživatel@doména.tld), budou vaše kontakty přidány automaticky. Toto pole bude po dokončení vyprázdněno.';
$a->strings['Repair OStatus subscriptions'] = 'Opravit odběry z OStatus';
$a->strings['Email/Mailbox Setup'] = 'Nastavení e-mailu';
$a->strings['If you wish to communicate with email contacts using this service (optional), please specify how to connect to your mailbox.'] = 'Pokud chcete komunikovat pomocí této služby s vašimi kontakty z e-mailu (volitelné), uveďte, jak se připojit k Vaší e-mailové schránce.';
$a->strings['Last successful email check:'] = 'Poslední úspěšná kontrola e-mailu:';
$a->strings['IMAP server name:'] = 'Jméno IMAP serveru:';
$a->strings['IMAP port:'] = 'IMAP port:';
$a->strings['Security:'] = 'Zabezpečení:';
$a->strings['None'] = 'Žádné';
$a->strings['Email login name:'] = 'Přihlašovací jméno k e-mailu:';
$a->strings['Email password:'] = 'Heslo k e-mailu:';
$a->strings['Reply-to address:'] = 'Odpovědět na adresu:';
$a->strings['Send public posts to all email contacts:'] = 'Poslat veřejné příspěvky na všechny e-mailové kontakty:';
$a->strings['Action after import:'] = 'Akce po importu:';
$a->strings['Mark as seen'] = 'Označit jako přečtené';
$a->strings['Move to folder'] = 'Přesunout do složky';
$a->strings['Move to folder:'] = 'Přesunout do složky:';
$a->strings['No special theme for mobile devices'] = 'Žádný speciální motiv pro mobilní zařízení';
$a->strings['%s - (Unsupported)'] = '%s - (Nepodporováno)';
$a->strings['%s - (Experimental)'] = '%s - (Experimentální)';
$a->strings['Sunday'] = 'neděle';
$a->strings['Monday'] = 'pondělí';
$a->strings['Display Settings'] = 'Nastavení zobrazení';
$a->strings['Display Theme:'] = 'Motiv zobrazení:';
$a->strings['Mobile Theme:'] = 'Mobilní motiv:';
$a->strings['Suppress warning of insecure networks'] = 'Potlačit varování o nezabezpečených sítích';
$a->strings['Should the system suppress the warning that the current group contains members of networks that can\'t receive non public postings.'] = 'Zvolte, zda má systém potlačit zobrazování varování, že aktuální skupina obsahuje členy sítí, které nemohou přijímat soukromé příspěvky.';
$a->strings['Update browser every xx seconds'] = 'Aktualizovat prohlížeč každých xx sekund';
$a->strings['Minimum of 10 seconds. Enter -1 to disable it.'] = 'Minimum je 10 sekund. Zadáním hodnoty -1 funkci vypnete.';
$a->strings['Number of items to display per page:'] = 'Počet položek zobrazených na stránce:';
$a->strings['Maximum of 100 items'] = 'Maximum 100 položek';
$a->strings['Number of items to display per page when viewed from mobile device:'] = 'Počet položek ke zobrazení na stránce při zobrazení na mobilním zařízení:';
$a->strings['Don\'t show emoticons'] = 'Nezobrazovat emotikony';
$a->strings['Calendar'] = 'Kalendář';
$a->strings['Beginning of week:'] = 'Začátek týdne:';
$a->strings['Don\'t show notices'] = 'Nezobrazovat oznámění';
$a->strings['Infinite scroll'] = 'Nekonečné posouvání';
$a->strings['Automatic updates only at the top of the network page'] = 'Automatické aktualizace pouze na horní straně stránky Síť.';
$a->strings['When disabled, the network page is updated all the time, which could be confusing while reading.'] = 'Pokud je tato funkce vypnuta, stránka Síť bude neustále aktualizována, což může být při čtení matoucí.';
$a->strings['Bandwidth Saver Mode'] = 'Režim šetření dat';
$a->strings['When enabled, embedded content is not displayed on automatic updates, they only show on page reload.'] = 'Pokud je toto zapnuto, nebude při automatických aktualizacích zobrazován vložený obsah, zobrazí se pouze při obnovení stránky.';
$a->strings['Smart Threading'] = 'Chytrá vlákna';
$a->strings['When enabled, suppress extraneous thread indentation while keeping it where it matters. Only works if threading is available and enabled.'] = 'Pokud je toto povoleno, bude potlačeno vnější odsazení vláken, která zároveň zůstanou tam, kde mají význam. Funguje pouze pokud je povoleno vláknování.';
$a->strings['General Theme Settings'] = 'Obecná nastavení motivu';
$a->strings['Custom Theme Settings'] = 'Vlastní nastavení motivu';
$a->strings['Content Settings'] = 'Nastavení obsahu';
$a->strings['Theme settings'] = 'Nastavení motivu';
$a->strings['Unable to find your profile. Please contact your admin.'] = 'Nelze najít Váš účet. Prosím kontaktujte vašeho administrátora.';
$a->strings['Account Types'] = 'Typy účtů';
$a->strings['Personal Page Subtypes'] = 'Podtypy osobních stránek';
$a->strings['Community Forum Subtypes'] = 'Podtypy komunitních fór';
$a->strings['Personal Page'] = 'Osobní stránka';
$a->strings['Account for a personal profile.'] = 'Účet pro osobní profil.';
$a->strings['Organisation Page'] = 'Stránka organizace';
$a->strings['Account for an organisation that automatically approves contact requests as "Followers".'] = 'Účet pro organizaci, který automaticky potvrzuje požadavky o přidání kontaktu jako „Sledující“.';
$a->strings['News Page'] = 'Zpravodajská stránka';
$a->strings['Account for a news reflector that automatically approves contact requests as "Followers".'] = 'Účet pro zpravodaje, který automaticky potvrzuje požadavky o přidání kontaktu jako „Sledující“.';
$a->strings['Community Forum'] = 'Komunitní fórum';
$a->strings['Account for community discussions.'] = 'Účet pro komunitní diskuze.';
$a->strings['Normal Account Page'] = 'Normální stránka účtu';
$a->strings['Account for a regular personal profile that requires manual approval of "Friends" and "Followers".'] = 'Účet pro běžný osobní profil, který vyžaduje manuální potvrzení „Přátel“ a „Sledujících“.';
$a->strings['Soapbox Page'] = 'Propagační stránka';
$a->strings['Account for a public profile that automatically approves contact requests as "Followers".'] = 'Účet pro veřejný profil, který automaticky potvrzuje požadavky o přidání kontaktu jako „Sledující“.';
$a->strings['Public Forum'] = 'Veřejné fórum';
$a->strings['Automatically approves all contact requests.'] = 'Automaticky potvrzuje všechny žádosti o přidání kontaktu.';
$a->strings['Automatic Friend Page'] = 'Stránka s automatickými přátely';
$a->strings['Account for a popular profile that automatically approves contact requests as "Friends".'] = 'Účet pro populární profil, který automaticky potvrzuje požadavky o přidání kontaktu jako „Přátele“.';
$a->strings['Private Forum [Experimental]'] = 'Soukromé fórum [Experimentální]';
$a->strings['Requires manual approval of contact requests.'] = 'Vyžaduje manuální potvrzení požadavků o přidání kontaktu.';
$a->strings['OpenID:'] = 'OpenID:';
$a->strings['(Optional) Allow this OpenID to login to this account.'] = '(Volitelné) Povolit tomuto OpenID přihlášení k tomuto účtu.';
$a->strings['Publish your default profile in your local site directory?'] = 'Publikovat váš výchozí profil v místním adresáři webu?';
$a->strings['Your profile will be published in this node\'s <a href="%s">local directory</a>. Your profile details may be publicly visible depending on the system settings.'] = 'Váš profil bude publikován v <a href="%s">místním adresáři</a> tohoto serveru. Vaše detaily o profilu mohou být veřejně viditelné v závislosti na systémových nastaveních.';
$a->strings['Publish your default profile in the global social directory?'] = 'Publikovat váš výchozí profil v globální sociálním adresáři?';
$a->strings['Your profile will be published in the global friendica directories (e.g. <a href="%s">%s</a>). Your profile will be visible in public.'] = 'Váš profil bude publikován v globálních adresářích Friendica (např. <a href="%s">%s</a>). Váš profil bude veřejně viditelný.';
$a->strings['This setting also determines whether Friendica will inform search engines that your profile should be indexed or not. Third-party search engines may or may not respect this setting.'] = 'Toto nastavení také určuje, bude-li Friendica informovat vyhledávače, že může být váš profil indexován. Vyhledávače třetích stran mohou, ale nemusejí toto nastavení respektovat.';
$a->strings['Hide your contact/friend list from viewers of your default profile?'] = 'Skrýt váš seznam kontaktů/přátel před návštěvníky vašeho výchozího profilu?';
$a->strings['Your contact list won\'t be shown in your default profile page. You can decide to show your contact list separately for each additional profile you create'] = 'Váš seznam kontaktů nebude zobrazen na vaší výchozí profilové stránce. Můžete se rozhodnout, jestli chcete zobrazit váš seznam kontaktů zvlášť pro každý další profil, který si vytvoříte.';
$a->strings['Hide your profile details from anonymous viewers?'] = 'Skrýt vaše profilové detaily před anonymními návštěvníky?';
$a->strings['Anonymous visitors will only see your profile picture, your display name and the nickname you are using on your profile page. Your public posts and replies will still be accessible by other means.'] = 'Anonymní návštěvníci mohou pouze vidět váš profilový obrázek, zobrazované jméno a přezdívku, kterou používáte na vaší profilové stránce. vaše veřejné příspěvky a odpovědi budou stále dostupné jinými způsoby.';
$a->strings['Allow friends to post to your profile page?'] = 'Povolit přátelům umisťování příspěvků na vaši profilovou stránku?';
$a->strings['Your contacts may write posts on your profile wall. These posts will be distributed to your contacts'] = 'Vaše kontakty mohou psát příspěvky na vaši profilovou zeď. Tyto příspěvky budou přeposílány vašim kontaktům.';
$a->strings['Allow friends to tag your posts?'] = 'Povolit přátelům označovat vaše příspěvky?';
$a->strings['Your contacts can add additional tags to your posts.'] = 'Vaše kontakty mohou přidávat k vašim příspěvkům dodatečné štítky.';
$a->strings['Allow us to suggest you as a potential friend to new members?'] = 'Povolit, abychom vás navrhovali jako přátelé pro nové členy?';
$a->strings['If you like, Friendica may suggest new members to add you as a contact.'] = 'Pokud budete chtít, může Friendica nabízet novým členům, aby si vás přidali jako kontakt.';
$a->strings['Permit unknown people to send you private mail?'] = 'Povolit neznámým lidem vám zasílat soukromé zprávy?';
$a->strings['Friendica network users may send you private messages even if they are not in your contact list.'] = 'Uživatelé sítě Friendica vám mohou posílat soukromé zprávy, i pokud nejsou ve vašich kontaktech.';
$a->strings['Profile is <strong>not published</strong>.'] = 'Profil <strong>není zveřejněn</strong>.';
$a->strings['Your Identity Address is <strong>\'%s\'</strong> or \'%s\'.'] = 'Vaše adresa identity je <strong>„%s“</strong> nebo „%s“.';
$a->strings['Automatically expire posts after this many days:'] = 'Automaticky expirovat příspěvky po zadaném počtu dní:';
$a->strings['If empty, posts will not expire. Expired posts will be deleted'] = 'Pokud je prázdné, příspěvky nebudou nikdy expirovat. Expirované příspěvky budou vymazány';
$a->strings['Advanced expiration settings'] = 'Pokročilé nastavení expirací';
$a->strings['Advanced Expiration'] = 'Nastavení expirací';
$a->strings['Expire posts:'] = 'Expirovat příspěvky:';
$a->strings['Expire personal notes:'] = 'Expirovat osobní poznámky:';
$a->strings['Expire starred posts:'] = 'Expirovat příspěvky s hvězdou:';
$a->strings['Expire photos:'] = 'Expirovat fotky:';
$a->strings['Only expire posts by others:'] = 'Příspěvky expirovat pouze ostatními:';
$a->strings['Account Settings'] = 'Nastavení účtu';
$a->strings['Password Settings'] = 'Nastavení hesla';
$a->strings['New Password:'] = 'Nové heslo:';
$a->strings['Allowed characters are a-z, A-Z, 0-9 and special characters except white spaces, accentuated letters and colon (:).'] = 'Povolené znaky jsou a-z, A-Z, 0-9 a zvláštní znaky kromě mezer, znaků s diakritikou a dvojtečky (:).';
$a->strings['Confirm:'] = 'Potvrďte:';
$a->strings['Leave password fields blank unless changing'] = 'Pokud nechcete změnit heslo, položku hesla nevyplňujte';
$a->strings['Current Password:'] = 'Stávající heslo:';
$a->strings['Your current password to confirm the changes'] = 'Vaše stávající heslo k potvrzení změn';
$a->strings['Password:'] = 'Heslo: ';
$a->strings['Basic Settings'] = 'Základní nastavení';
$a->strings['Full Name:'] = 'Celé jméno:';
$a->strings['Email Address:'] = 'E-mailová adresa:';
$a->strings['Your Timezone:'] = 'Vaše časové pásmo:';
$a->strings['Your Language:'] = 'Váš jazyk:';
$a->strings['Set the language we use to show you friendica interface and to send you emails'] = 'Nastavte jazyk, který máme používat pro rozhraní Friendica a pro posílání e-mailů';
$a->strings['Default Post Location:'] = 'Výchozí poloha příspěvků:';
$a->strings['Use Browser Location:'] = 'Používat polohu dle prohlížeče:';
$a->strings['Security and Privacy Settings'] = 'Nastavení zabezpečení a soukromí';
$a->strings['Maximum Friend Requests/Day:'] = 'Maximální počet požadavků o přátelství za den:';
$a->strings['(to prevent spam abuse)'] = '(ay se zabránilo spamu)';
$a->strings['Default Post Permissions'] = 'Výchozí oprávnění pro příspěvek';
$a->strings['(click to open/close)'] = '(klikněte pro otevření/zavření)';
$a->strings['Default Private Post'] = 'Výchozí soukromý příspěvek';
$a->strings['Default Public Post'] = 'Výchozí veřejný příspěvek';
$a->strings['Default Permissions for New Posts'] = 'Výchozí oprávnění pro nové příspěvky';
$a->strings['Maximum private messages per day from unknown people:'] = 'Maximum soukromých zpráv od neznámých lidí za den:';
$a->strings['Notification Settings'] = 'Nastavení oznámení';
$a->strings['Send a notification email when:'] = 'Poslat oznámení e-mailem, když:';
$a->strings['You receive an introduction'] = 'obdržíte představení';
$a->strings['Your introductions are confirmed'] = 'jsou vaše představení potvrzena';
$a->strings['Someone writes on your profile wall'] = 'vám někdo napíše na vaši profilovou stránku';
$a->strings['Someone writes a followup comment'] = 'Vám někdo napíše následný komentář';
$a->strings['You receive a private message'] = 'obdržíte soukromou zprávu';
$a->strings['You receive a friend suggestion'] = 'obdržíte návrh přátelství';
$a->strings['You are tagged in a post'] = 'jste označen v příspěvku';
$a->strings['You are poked/prodded/etc. in a post'] = 'vás věkdo šťouchne/dloubne/apod. v příspěvku';
$a->strings['Activate desktop notifications'] = 'Aktivovat desktopová oznámení';
$a->strings['Show desktop popup on new notifications'] = 'Zobrazit desktopové zprávy při nových oznámeních.';
$a->strings['Text-only notification emails'] = 'Pouze textové oznamovací e-maily';
$a->strings['Send text only notification emails, without the html part'] = 'Posílat pouze textové oznamovací e-maily, bez HTML části.';
$a->strings['Show detailled notifications'] = 'Zobrazit detailní oznámení';
$a->strings['Per default, notifications are condensed to a single notification per item. When enabled every notification is displayed.'] = 'Ve výchozím nastavení jsou oznámení zhuštěné na jediné oznámení pro každou položku. Pokud je toto povolené, budou zobrazována všechna oznámení.';
$a->strings['Advanced Account/Page Type Settings'] = 'Pokročilé nastavení účtu/stránky';
$a->strings['Change the behaviour of this account for special situations'] = 'Změnit chování tohoto účtu ve speciálních situacích';
$a->strings['Relocate'] = 'Přemístit';
$a->strings['If you have moved this profile from another server, and some of your contacts don\'t receive your updates, try pushing this button.'] = 'Pokud jste přemístil/a tento profil z jiného serveru a nějaký z vašich kontaktů nedostává vaše aktualizace, zkuste stisknout toto tlačítko.';
$a->strings['Resend relocate message to contacts'] = 'Znovu odeslat správu o přemístění Vašim kontaktům';
$a->strings['default'] = 'výchozí';
$a->strings['greenzero'] = 'greenzero';
$a->strings['purplezero'] = 'purplezero';
$a->strings['easterbunny'] = 'easterbunny';
$a->strings['darkzero'] = 'darkzero';
$a->strings['comix'] = 'comix';
$a->strings['slackr'] = 'slackr';
$a->strings['Variations'] = 'Variace';
$a->strings['Top Banner'] = 'Vrchní banner';
$a->strings['Resize image to the width of the screen and show background color below on long pages.'] = 'Změnit velikost obrázku na šířku obrazovky a ukázat pod ním barvu pozadí na dlouhých stránkách.';
$a->strings['Full screen'] = 'Celá obrazovka';
$a->strings['Resize image to fill entire screen, clipping either the right or the bottom.'] = 'Změnit velikost obrázku, aby zaplnil celou obrazovku, a odštěpit buď pravou, nebo dolní část';
$a->strings['Single row mosaic'] = 'Mozaika s jedinou řadou';
$a->strings['Resize image to repeat it on a single row, either vertical or horizontal.'] = 'Změnit velikost obrázku a opakovat jej v jediné řadě, buď svislé, nebo vodorovné';
$a->strings['Mosaic'] = 'Mozaika';
$a->strings['Repeat image to fill the screen.'] = 'Opakovat obrázek, aby zaplnil obrazovku';
$a->strings['Custom'] = 'Vlastní';
$a->strings['Note'] = 'Poznámka';
$a->strings['Check image permissions if all users are allowed to see the image'] = 'Zkontrolujte povolení u obrázku, jestli mají všichni uživatelé povolení obrázek vidět';
$a->strings['Select color scheme'] = 'Vybrat barevné schéma';
$a->strings['Copy or paste schemestring'] = 'Kopírovat a vložit řetězec schématu';
$a->strings['You can copy this string to share your theme with others. Pasting here applies the schemestring'] = 'Tento řetězec můžete zkopírovat a sdílet tak svůj motiv s jinými lidmi. Vložením sem aplikujete řetězec schématu';
$a->strings['Navigation bar background color'] = 'Barva pozadí navigační lišty';
$a->strings['Navigation bar icon color '] = 'Barva ikon navigační lišty';
$a->strings['Link color'] = 'Barva odkazů';
$a->strings['Set the background color'] = 'Nastavit barvu pozadí';
$a->strings['Content background opacity'] = 'Průhlednost pozadí obsahu';
$a->strings['Set the background image'] = 'Nastavit obrázek na pozadí';
$a->strings['Background image style'] = 'Styl obrázku na pozadí';
$a->strings['Enable Compose page'] = 'Povolit stránku komponování';
$a->strings['This replaces the jot modal window for writing new posts with a link to <a href="compose">the new Compose page</a>.'] = 'Tohle nahradí modální okno pro psaní nových příspěvků odkazem na <a href="compose">novou stránku komponování</a>.';
$a->strings['Login page background image'] = 'Obrázek na pozadí přihlašovací stránky';
$a->strings['Login page background color'] = 'Barva pozadí přihlašovací stránky';
$a->strings['Leave background image and color empty for theme defaults'] = 'Nechejte obrázek a barvu pozadí prázdnou pro výchozí nastavení motivů';
$a->strings['Guest'] = 'Host';
$a->strings['Visitor'] = 'Návštěvník';
$a->strings['Status'] = 'Stav';
$a->strings['Your posts and conversations'] = 'Vaše příspěvky a konverzace';
$a->strings['Your profile page'] = 'Vaše profilová stránka';
$a->strings['Your photos'] = 'Vaše fotky';
$a->strings['Videos'] = 'Videa';
$a->strings['Your videos'] = 'Vaše videa';
$a->strings['Your events'] = 'Vaše události';
$a->strings['Network'] = 'Síť';
$a->strings['Conversations from your friends'] = 'Konverzace od vašich přátel';
$a->strings['Events and Calendar'] = 'Události a kalendář';
$a->strings['Private mail'] = 'Soukromá pošta';
$a->strings['Account settings'] = 'Nastavení účtu';
$a->strings['Contacts'] = 'Kontakty';
$a->strings['Manage/edit friends and contacts'] = 'Spravovat/upravit přátelé a kontakty';
$a->strings['Alignment'] = 'Zarovnání';
$a->strings['Left'] = 'Vlevo';
$a->strings['Center'] = 'Uprostřed';
$a->strings['Color scheme'] = 'Barevné schéma';
$a->strings['Posts font size'] = 'Velikost písma u příspěvků';
$a->strings['Textareas font size'] = 'Velikost písma textů';
$a->strings['Comma separated list of helper forums'] = 'Seznam fór s pomocníky, oddělených čárkami';
$a->strings['don\'t show'] = 'nezobrazit';
$a->strings['show'] = 'zobrazit';
$a->strings['Set style'] = 'Nastavit styl';
$a->strings['Community Pages'] = 'Komunitní stránky';
$a->strings['Community Profiles'] = 'Komunitní profily';
$a->strings['Help or @NewHere ?'] = 'Pomoc nebo @ProNováčky ?';
$a->strings['Connect Services'] = 'Připojit služby';
$a->strings['Find Friends'] = 'Najít přátele';
$a->strings['Last users'] = 'Poslední uživatelé';
$a->strings['Find People'] = 'Najít lidi';
$a->strings['Enter name or interest'] = 'Zadejte jméno nebo zájmy';
$a->strings['Examples: Robert Morgenstein, Fishing'] = 'Příklady: Josef Dvořák, rybaření';
$a->strings['Find'] = 'Najít';
$a->strings['Similar Interests'] = 'Podobné zájmy';
$a->strings['Random Profile'] = 'Náhodný profil';
$a->strings['Invite Friends'] = 'Pozvat přátele';
$a->strings['Global Directory'] = 'Globální adresář';
$a->strings['Local Directory'] = 'Místní adresář';
$a->strings['Forums'] = 'Fóra';
$a->strings['External link to forum'] = 'Externí odkaz na fórum';
$a->strings['show more'] = 'zobrazit více';
$a->strings['Quick Start'] = 'Rychlý začátek';
$a->strings['Help'] = 'Nápověda';
$a->strings['Tuesday'] = 'úterý';
$a->strings['Wednesday'] = 'středa';
$a->strings['Thursday'] = 'čtvrtek';
$a->strings['Friday'] = 'pátek';
$a->strings['Saturday'] = 'sobota';
$a->strings['January'] = 'leden';
$a->strings['February'] = 'únor';
$a->strings['March'] = 'březen';
$a->strings['April'] = 'duben';
$a->strings['May'] = 'květen';
$a->strings['June'] = 'červen';
$a->strings['July'] = 'červenec';
$a->strings['August'] = 'srpen';
$a->strings['September'] = 'září';
$a->strings['October'] = 'říjen';
$a->strings['November'] = 'listopad';
$a->strings['December'] = 'prosinec';
$a->strings['Mon'] = 'pon';
$a->strings['Tue'] = 'úte';
$a->strings['Wed'] = 'stř';
$a->strings['Thu'] = 'čtv';
$a->strings['Fri'] = 'pát';
$a->strings['Sat'] = 'sob';
$a->strings['Sun'] = 'ned';
$a->strings['Jan'] = 'led';
$a->strings['Feb'] = 'úno';
$a->strings['Mar'] = 'bře';
$a->strings['Apr'] = 'dub';
$a->strings['Jun'] = 'čvn';
$a->strings['Jul'] = 'čvc';
$a->strings['Aug'] = 'srp';
$a->strings['Sep'] = 'zář';
$a->strings['Oct'] = 'říj';
$a->strings['Nov'] = 'lis';
$a->strings['Dec'] = 'pro';
$a->strings['poke'] = 'šťouchnout';
$a->strings['poked'] = 'šťouchnul/a';
$a->strings['ping'] = 'cinknout';
$a->strings['pinged'] = 'cinknul/a';
$a->strings['prod'] = 'dloubnout';
$a->strings['prodded'] = 'dloubnul/a';
$a->strings['slap'] = 'uhodit';
$a->strings['slapped'] = 'uhodil/a';
$a->strings['finger'] = 'osahat';
$a->strings['fingered'] = 'osahal/a';
$a->strings['rebuff'] = 'odmítnout';
$a->strings['rebuffed'] = 'odmítnul/a';
$a->strings['Update %s failed. See error logs.'] = 'Aktualizace %s selhala. Zkontrolujte protokol chyb.';
$a->strings['
				The friendica developers released update %s recently,
				but when I tried to install it, something went terribly wrong.
				This needs to be fixed soon and I can\'t do it alone. Please contact a
				friendica developer if you can not help me on your own. My database might be invalid.'] = '
				Vývojáři Friendica nedávno vydali aktualizaci %s,
				ale když jsem ji zkusil instalovat, něco se strašně pokazilo.
				Toto se musí ihned opravit a nemůžu to udělat sám. Prosím, kontaktujte
				vývojáře Friendica, pokud to nedokážete sám. Moje databáze může být neplatná.';
$a->strings['The error message is
[pre]%s[/pre]'] = 'Chybová zpráva je
[pre]%s[/pre]';
$a->strings['[Friendica Notify] Database update'] = '[Friendica:Oznámení] Aktualizace databáze';
$a->strings['
					The friendica database was successfully updated from %s to %s.'] = '
					Databáze Friendica byla úspěšně aktualizována z verze %s na %s.';
$a->strings['Error decoding account file'] = 'Chyba dekódování uživatelského účtu';
$a->strings['Error! No version data in file! This is not a Friendica account file?'] = 'Chyba! V souboru nejsou data o verzi! Je to opravdu soubor s účtem Friendica?';
$a->strings['User \'%s\' already exists on this server!'] = 'Uživatel „%s“ již na tomto serveru existuje!';
$a->strings['User creation error'] = 'Chyba při vytváření uživatele';
$a->strings['User profile creation error'] = 'Chyba vytváření uživatelského profilu';
$a->strings['%d contact not imported'] = [
	0 => '%d kontakt nenaimportován',
	1 => '%d kontakty nenaimportovány',
	2 => '%d kontaktu nenaimportováno',
	3 => '%d kontaktů nenaimportováno',
];
$a->strings['Done. You can now login with your username and password'] = 'Hotovo. Nyní  se můžete přihlásit se svým uživatelským jménem a heslem';
$a->strings['The database configuration file "config/local.config.php" could not be written. Please use the enclosed text to create a configuration file in your web server root.'] = 'Databázový konfigurační soubor „config/local.config.php“ nemohl být zapsán. Prosím, použijte přiložený text k vytvoření konfiguračního souboru v kořenovém adresáři vašeho webového serveru.';
$a->strings['You may need to import the file "database.sql" manually using phpmyadmin or mysql.'] = 'Nejspíše budete muset manuálně importovat soubor „database.sql“ pomocí phpMyAdmin či MySQL.';
$a->strings['Please see the file "INSTALL.txt".'] = 'Přečtěte si prosím informace v souboru „INSTALL.txt“.';
$a->strings['Could not find a command line version of PHP in the web server PATH.'] = 'Nelze najít verzi PHP pro příkazový řádek v PATH webového serveru.';
$a->strings['If you don\'t have a command line version of PHP installed on your server, you will not be able to run the background processing. See <a href=\'https://github.com/friendica/friendica/blob/master/doc/Install.md#set-up-the-worker\'>\'Setup the worker\'</a>'] = 'Pokud nemáte na vašem serveru nainstalovanou verzi PHP pro příkazový řádek, nebudete moci spouštět procesy v pozadí. Více na <a href=\'https://github.com/friendica/friendica/blob/master/doc/Install.md#set-up-the-worker\'>„Nastavte pracovníka“</a>';
$a->strings['PHP executable path'] = 'Cesta ke spustitelnému souboru PHP';
$a->strings['Enter full path to php executable. You can leave this blank to continue the installation.'] = 'Zadejte plnou cestu ke spustitelnému souboru PHP. Tento údaj můžete ponechat nevyplněný a pokračovat v instalaci.';
$a->strings['Command line PHP'] = 'Příkazový řádek PHP';
$a->strings['PHP executable is not the php cli binary (could be cgi-fgci version)'] = 'PHP executable není php cli binary (může být verze cgi-fgci)';
$a->strings['Found PHP version: '] = 'Nalezena verze PHP:';
$a->strings['PHP cli binary'] = 'PHP cli binary';
$a->strings['The command line version of PHP on your system does not have "register_argc_argv" enabled.'] = 'Verze PHP pro příkazový řádek na vašem systému nemá povoleno nastavení „register_argc_argv“.';
$a->strings['This is required for message delivery to work.'] = 'Toto je nutné pro fungování doručování zpráv.';
$a->strings['PHP register_argc_argv'] = 'PHP register_argc_argv';
$a->strings['Error: the "openssl_pkey_new" function on this system is not able to generate encryption keys'] = 'Chyba: funkce „openssl_pkey_new“ na tomto systému není schopna generovat šifrovací klíče';
$a->strings['If running under Windows, please see "http://www.php.net/manual/en/openssl.installation.php".'] = 'Pokud systém běží na Windows, prosím přečtěte si „http://www.php.net/manual/en/openssl.installation.php“.';
$a->strings['Generate encryption keys'] = 'Generovat šifrovací klíče';
$a->strings['Error: Apache webserver mod-rewrite module is required but not installed.'] = 'Chyba: Modul mod_rewrite webového serveru Apache je vyadován, ale není nainstalován.';
$a->strings['Apache mod_rewrite module'] = 'Modul Apache mod_rewrite';
$a->strings['Error: PDO or MySQLi PHP module required but not installed.'] = 'Chyba: PHP modul PDO nebo MySQLi je vyžadován, ale není nainstalován.';
$a->strings['Error: The MySQL driver for PDO is not installed.'] = 'Chyba: Ovladač MySQL pro PDO není nainstalován';
$a->strings['PDO or MySQLi PHP module'] = 'PHP modul PDO nebo MySQLi';
$a->strings['Error, XML PHP module required but not installed.'] = 'Chyba: PHP modul XML je vyžadován, ale není nainstalován';
$a->strings['XML PHP module'] = 'PHP modul XML';
$a->strings['libCurl PHP module'] = 'PHP modul libCurl';
$a->strings['Error: libCURL PHP module required but not installed.'] = 'Chyba: PHP modul libcurl je vyžadován, ale není nainstalován.';
$a->strings['GD graphics PHP module'] = 'PHP modul GD graphics';
$a->strings['Error: GD graphics PHP module with JPEG support required but not installed.'] = 'Chyba: PHP modul GD graphics je vyžadován, ale není nainstalován.';
$a->strings['OpenSSL PHP module'] = 'PHP modul OpenSSL';
$a->strings['Error: openssl PHP module required but not installed.'] = 'Chyba: PHP modul openssl je vyžadován, ale není nainstalován.';
$a->strings['mb_string PHP module'] = 'PHP modul mb_string';
$a->strings['Error: mb_string PHP module required but not installed.'] = 'Chyba: PHP modul mb_string  je vyžadován, ale není nainstalován.';
$a->strings['iconv PHP module'] = 'PHP modul iconv';
$a->strings['Error: iconv PHP module required but not installed.'] = 'Chyba: PHP modul iconv je vyžadován, ale není nainstalován';
$a->strings['POSIX PHP module'] = 'PHP modul POSIX';
$a->strings['Error: POSIX PHP module required but not installed.'] = 'Chyba: PHP modul POSIX je vyžadován, ale není nainstalován.';
$a->strings['JSON PHP module'] = 'PHP modul JSON';
$a->strings['Error: JSON PHP module required but not installed.'] = 'Chyba: PHP modul JSON je vyžadován, ale není nainstalován';
$a->strings['File Information PHP module'] = 'PHP modul File Information';
$a->strings['Error: File Information PHP module required but not installed.'] = 'Chyba: PHP modul File Information  je vyžadován, ale není nainstalován.';
$a->strings['The web installer needs to be able to create a file called "local.config.php" in the "config" folder of your web server and it is unable to do so.'] = 'Webový instalátor musí být schopen vytvořit soubor s názvem „local.config.php“ v adresáři „config“ Vašeho webového serveru a není mu to umožněno. ';
$a->strings['This is most often a permission setting, as the web server may not be able to write files in your folder - even if you can.'] = 'Toto je nejčastěji nastavením oprávnění, kdy webový server nemusí být schopen zapisovat soubory do vašeho adresáře - i když vy můžete.';
$a->strings['At the end of this procedure, we will give you a text to save in a file named local.config.php in your Friendica "config" folder.'] = 'Na konci této procedury od nás obdržíte text k uložení v souboru pojmenovaném local.config.php v adresáři „config“ na Vaší instalaci Friendica.';
$a->strings['You can alternatively skip this procedure and perform a manual installation. Please see the file "INSTALL.txt" for instructions.'] = 'Alternativně můžete tento krok přeskočit a provést manuální instalaci. Přečtěte si prosím soubor „INSTALL.txt“ pro další instrukce.';
$a->strings['config/local.config.php is writable'] = 'Soubor config/local.config.php je zapisovatelný';
$a->strings['Friendica uses the Smarty3 template engine to render its web views. Smarty3 compiles templates to PHP to speed up rendering.'] = 'Friendica používá k zobrazení svých webových stránek šablonovací nástroj Smarty3. Smarty3 kompiluje šablony do PHP pro zrychlení vykreslování.';
$a->strings['In order to store these compiled templates, the web server needs to have write access to the directory view/smarty3/ under the Friendica top level folder.'] = 'Pro uložení kompilovaných šablon potřebuje webový server mít přístup k zápisu do adresáře view/smarty3/ pod kořenovým adresářem Friendica.';
$a->strings['Please ensure that the user that your web server runs as (e.g. www-data) has write access to this folder.'] = 'Prosím ujistěte se, že má uživatel webového serveru (jako například www-data) právo zápisu do tohoto adresáře';
$a->strings['Note: as a security measure, you should give the web server write access to view/smarty3/ only--not the template files (.tpl) that it contains.'] = 'Poznámka: jako bezpečnostní opatření byste měl/a přidělit webovém serveru právo zápisu pouze do adresáře /view/smarty3/ -- a nikoliv už do souborů s šablonami (.tpl), které obsahuje.';
$a->strings['view/smarty3 is writable'] = 'Adresář view/smarty3 je zapisovatelný';
$a->strings['Url rewrite in .htaccess is not working. Make sure you copied .htaccess-dist to .htaccess.'] = 'URL rewrite v souboru .htacess nefunguje. Ujistěte se, že jste zkopíroval/a soubor .htaccess-dist jako .htaccess';
$a->strings['Error message from Curl when fetching'] = 'Chybová zpráva od Curl při načítání';
$a->strings['Url rewrite is working'] = 'Url rewrite je funkční.';
$a->strings['ImageMagick PHP extension is not installed'] = 'PHP rozšíření ImageMagick není nainstalováno';
$a->strings['ImageMagick PHP extension is installed'] = 'PHP rozšíření ImageMagick je nainstalováno';
$a->strings['ImageMagick supports GIF'] = 'ImageMagick podporuje GIF';
$a->strings['Database already in use.'] = 'Databáze se již používá.';
$a->strings['Could not connect to database.'] = 'Nelze se připojit k databázi.';
$a->strings['System'] = 'Systém';
$a->strings['Home'] = 'Domů';
$a->strings['Introductions'] = 'Představení';
$a->strings['%s commented on %s\'s post'] = '%s okomentoval/a příspěvek uživatele %s';
$a->strings['%s created a new post'] = '%s vytvořil nový příspěvek';
$a->strings['%s liked %s\'s post'] = 'Uživateli %s se líbí příspěvek uživatele %s';
$a->strings['%s disliked %s\'s post'] = 'Uživateli %s se nelíbí příspěvek uživatele %s';
$a->strings['%s is attending %s\'s event'] = '%s se zúčastní události %s';
$a->strings['%s is not attending %s\'s event'] = '%s se nezúčastní události %s';
$a->strings['%s may attend %s\'s event'] = '%s by se mohl/a zúčastnit události %s';
$a->strings['%s is now friends with %s'] = '%s se nyní přátelí s uživatelem %s';
$a->strings['Friend Suggestion'] = 'Návrh přátelství';
$a->strings['Friend/Connect Request'] = 'Požadavek o přátelství/spojení';
$a->strings['New Follower'] = 'Nový sledující';
$a->strings['Welcome %s'] = 'Vítejte, %s';
$a->strings['Please upload a profile photo.'] = 'Prosím nahrajte profilovou fotku.';
$a->strings['Welcome back %s'] = 'Vítejte zpět, %s';
$a->strings['Post to Email'] = 'Poslat příspěvek na e-mail';
$a->strings['Visible to everybody'] = 'Viditelné pro všechny';
$a->strings['Connectors'] = 'Konektory';
$a->strings['Hide your profile details from unknown viewers?'] = 'Skrýt vaše profilové detaily před neznámými návštěvníky?';
$a->strings['Connectors disabled, since "%s" is enabled.'] = 'Konektory deaktivovány, neboť je aktivován „%s“.';
$a->strings['Close'] = 'Zavřít';
$a->strings['Birthday:'] = 'Narozeniny:';
$a->strings['YYYY-MM-DD or MM-DD'] = 'RRRR-MM-DD nebo MM-DD';
$a->strings['never'] = 'nikdy';
$a->strings['less than a second ago'] = 'méně než před sekundou';
$a->strings['year'] = 'rok';
$a->strings['years'] = 'let';
$a->strings['months'] = 'měsíců';
$a->strings['weeks'] = 'týdnů';
$a->strings['days'] = 'dní';
$a->strings['hour'] = 'hodina';
$a->strings['hours'] = 'hodin';
$a->strings['minute'] = 'minuta';
$a->strings['minutes'] = 'minut';
$a->strings['second'] = 'sekunda';
$a->strings['seconds'] = 'sekund';
$a->strings['in %1$d %2$s'] = 'za %1$d %2$s';
$a->strings['%1$d %2$s ago'] = 'před %1$d %2$s';
$a->strings['Loading more entries...'] = 'Načítám více záznamů...';
$a->strings['The end'] = 'Konec';
$a->strings['Follow'] = 'Sledovat';
$a->strings['@name, !forum, #tags, content'] = '@jméno, !fórum, #štítky, obsah';
$a->strings['Full Text'] = 'Celý text';
$a->strings['Tags'] = 'Štítky';
$a->strings['Click to open/close'] = 'Kliknutím otevřete/zavřete';
$a->strings['view full size'] = 'zobrazit v plné velikosti';
$a->strings['Image/photo'] = 'Obrázek/fotka';
$a->strings['<a href="%1$s" target="_blank">%2$s</a> %3$s'] = '<a href="%1$s" target="_blank">%2$s</a> %3$s';
$a->strings['$1 wrote:'] = '$1 napsal/a:';
$a->strings['Encrypted content'] = 'Šifrovaný obsah';
$a->strings['Invalid source protocol'] = 'Neplatný protokol zdroje';
$a->strings['Invalid link protocol'] = 'Neplatný protokol odkazu';
$a->strings['Export'] = 'Exportovat';
$a->strings['Export calendar as ical'] = 'Exportovat kalendář jako ical';
$a->strings['Export calendar as csv'] = 'Exportovat kalendář jako csv';
$a->strings['No contacts'] = 'Žádné kontakty';
$a->strings['%d Contact'] = [
	0 => '%d kontakt',
	1 => '%d kontakty',
	2 => '%d kontaktu',
	3 => '%d kontaktů',
];
$a->strings['View Contacts'] = 'Zobrazit kontakty';
$a->strings['Trending Tags (last %d hour)'] = [
	0 => 'Populární štítky (poslední %d hodina)',
	1 => 'Populární štítky (poslední %d hodiny)',
	2 => 'Populární štítky (posledních %d hodin)',
	3 => 'Populární štítky (posledních %d hodin)',
];
$a->strings['More Trending Tags'] = 'Další populární štítky';
$a->strings['newer'] = 'novější';
$a->strings['older'] = 'starší';
$a->strings['prev'] = 'předchozí';
$a->strings['last'] = 'poslední';
$a->strings['General Features'] = 'Obecné vlastnosti';
$a->strings['Multiple Profiles'] = 'Více profilů';
$a->strings['Ability to create multiple profiles'] = 'Schopnost vytvořit více profilů';
$a->strings['Photo Location'] = 'Poloha fotky';
$a->strings['Photo metadata is normally stripped. This extracts the location (if present) prior to stripping metadata and links it to a map.'] = 'Metadata fotek jsou normálně odebrána. Tato funkce před odebrání metadat extrahuje polohu (pokud je k dispozici) a propojí ji s mapou.';
$a->strings['Export Public Calendar'] = 'Exportovat veřejný kalendář';
$a->strings['Ability for visitors to download the public calendar'] = 'Umožnit návštěvníkům stáhnout si veřejný kalendář';
$a->strings['Trending Tags'] = 'Populární štítky';
$a->strings['Show a community page widget with a list of the most popular tags in recent public posts.'] = 'Zobrazit widget komunitní stránky se seznamem nejpopulárnějších štítků v nedávných veřejných příspěvcích.';
$a->strings['Post Composition Features'] = 'Nastavení vytváření příspěvků';
$a->strings['Auto-mention Forums'] = 'Automaticky zmiňovat fóra';
$a->strings['Add/remove mention when a forum page is selected/deselected in ACL window.'] = 'Přidat/odstranit zmínku, když je stránka na fóru označena/odznačena v okně ACL.';
$a->strings['Explicit Mentions'] = 'Výslovné zmínky';
$a->strings['Add explicit mentions to comment box for manual control over who gets mentioned in replies.'] = 'Přidá do pole pro komentování výslovné zmínky pro ruční kontrolu nad tím, koho zmíníte v odpovědích.';
$a->strings['Network Sidebar'] = 'Síťová postranní lišta';
$a->strings['Archives'] = 'Archivy';
$a->strings['Ability to select posts by date ranges'] = 'Možnost označit příspěvky dle časového intervalu';
$a->strings['Protocol Filter'] = 'Filtr protokolů';
$a->strings['Enable widget to display Network posts only from selected protocols'] = 'Povolením widgetu se budou zobrazovat síťové příspěvky pouze z vybraných protokolů';
$a->strings['Network Tabs'] = 'Síťové záložky';
$a->strings['Network New Tab'] = 'Síťová záložka Nové';
$a->strings['Enable tab to display only new Network posts (from the last 12 hours)'] = 'Povolit záložku pro zobrazení pouze nových příspěvků (za posledních 12 hodin)';
$a->strings['Network Shared Links Tab'] = 'Síťová záložka Sdílené odkazy ';
$a->strings['Enable tab to display only Network posts with links in them'] = 'Povolit záložky pro zobrazování pouze Síťových příspěvků s vazbou na ně';
$a->strings['Post/Comment Tools'] = 'Nástroje příspěvků/komentářů';
$a->strings['Post Categories'] = 'Kategorie příspěvků';
$a->strings['Add categories to your posts'] = 'Přidat kategorie k vašim příspěvkům';
$a->strings['Advanced Profile Settings'] = 'Pokročilá nastavení profilu';
$a->strings['List Forums'] = 'Vypsat fóra';
$a->strings['Show visitors public community forums at the Advanced Profile Page'] = 'Zobrazit návštěvníkům veřejná komunitní fóra na stránce pokročilého profilu';
$a->strings['Tag Cloud'] = 'Štítkový oblak';
$a->strings['Provide a personal tag cloud on your profile page'] = 'Poskytne na vaší profilové stránce osobní „štítkový oblak“';
$a->strings['Display Membership Date'] = 'Zobrazit datum členství';
$a->strings['Display membership date in profile'] = 'Zobrazit v profilu datum připojení';
$a->strings['Nothing new here'] = 'Zde není nic nového';
$a->strings['Clear notifications'] = 'Vymazat oznámení';
$a->strings['Logout'] = 'Odhlásit se';
$a->strings['End this session'] = 'Konec této relace';
$a->strings['Login'] = 'Přihlásit se';
$a->strings['Sign in'] = 'Přihlásit se';
$a->strings['Personal notes'] = 'Osobní poznámky';
$a->strings['Your personal notes'] = 'Vaše osobní poznámky';
$a->strings['Home Page'] = 'Domovská stránka';
$a->strings['Register'] = 'Registrovat';
$a->strings['Create an account'] = 'Vytvořit účet';
$a->strings['Help and documentation'] = 'Nápověda a dokumentace';
$a->strings['Apps'] = 'Aplikace';
$a->strings['Addon applications, utilities, games'] = 'Doplňkové aplikace, nástroje, hry';
$a->strings['Search site content'] = 'Hledání na stránkách tohoto webu';
$a->strings['Community'] = 'Komunita';
$a->strings['Conversations on this and other servers'] = 'Konverzace na tomto a jiných serverech';
$a->strings['Directory'] = 'Adresář';
$a->strings['People directory'] = 'Adresář';
$a->strings['Information'] = 'Informace';
$a->strings['Information about this friendica instance'] = 'Informace o této instanci Friendica';
$a->strings['Terms of Service'] = 'Podmínky používání';
$a->strings['Terms of Service of this Friendica instance'] = 'Podmínky používání této instance Friendica';
$a->strings['Network Reset'] = 'Reset sítě';
$a->strings['Load Network page with no filters'] = 'Načíst stránku Síť bez filtrů';
$a->strings['Friend Requests'] = 'Požadavky o přátelství';
$a->strings['See all notifications'] = 'Zobrazit všechna oznámení';
$a->strings['Mark all system notifications seen'] = 'Označit všechna systémová oznámení jako přečtené';
$a->strings['Inbox'] = 'Doručená pošta';
$a->strings['Outbox'] = 'Odeslaná pošta';
$a->strings['Manage'] = 'Spravovat';
$a->strings['Manage other pages'] = 'Spravovat jiné stránky';
$a->strings['Manage/Edit Profiles'] = 'Spravovat/Editovat Profily';
$a->strings['Admin'] = 'Administrátor';
$a->strings['Site setup and configuration'] = 'Nastavení webu a konfigurace';
$a->strings['Navigation'] = 'Navigace';
$a->strings['Site map'] = 'Mapa webu';
$a->strings['Embedding disabled'] = 'Vkládání zakázáno';
$a->strings['Embedded content'] = 'Vložený obsah';
$a->strings['Add New Contact'] = 'Přidat nový kontakt';
$a->strings['Enter address or web location'] = 'Zadejte adresu nebo umístění webu';
$a->strings['Example: bob@example.com, http://example.com/barbara'] = 'Příklad: jan@priklad.cz, http://priklad.cz/lucie';
$a->strings['%d invitation available'] = [
	0 => '%d pozvánka k dispozici',
	1 => '%d pozvánky k dispozici',
	2 => '%d pozvánky k dispozici',
	3 => '%d pozvánek k dispozici',
];
$a->strings['Following'] = 'Sledující';
$a->strings['Mutual friends'] = 'Vzájemní přátelé';
$a->strings['Relationships'] = 'Vztahy';
$a->strings['All Contacts'] = 'Všechny kontakty';
$a->strings['Protocols'] = 'Protokoly';
$a->strings['All Protocols'] = 'Všechny protokoly';
$a->strings['Saved Folders'] = 'Uložené složky';
$a->strings['Everything'] = 'Všechno';
$a->strings['Categories'] = 'Kategorie';
$a->strings['%d contact in common'] = [
	0 => '%d společný kontakt',
	1 => '%d společné kontakty',
	2 => '%d společného kontaktu',
	3 => '%d společných kontaktů',
];
$a->strings['Frequently'] = 'Často';
$a->strings['Hourly'] = 'Hodinově';
$a->strings['Twice daily'] = 'Dvakrát denně';
$a->strings['Daily'] = 'Denně';
$a->strings['Weekly'] = 'Týdně';
$a->strings['Monthly'] = 'Měsíčně';
$a->strings['DFRN'] = 'DFRN';
$a->strings['OStatus'] = 'OStatus';
$a->strings['RSS/Atom'] = 'RSS/Atom';
$a->strings['Email'] = 'E-mail';
$a->strings['Zot!'] = 'Zot!';
$a->strings['LinkedIn'] = 'LinkedIn';
$a->strings['XMPP/IM'] = 'XMPP/IM';
$a->strings['MySpace'] = 'MySpace';
$a->strings['Google+'] = 'Google+';
$a->strings['pump.io'] = 'pump.io';
$a->strings['Twitter'] = 'Twitter';
$a->strings['Diaspora Connector'] = 'Diaspora Connector';
$a->strings['GNU Social Connector'] = 'GNU social Connector';
$a->strings['ActivityPub'] = 'ActivityPub';
$a->strings['pnut'] = 'pnut';
$a->strings['No answer'] = 'Žádná odpověď';
$a->strings['Male'] = 'Muž';
$a->strings['Female'] = 'Žena';
$a->strings['Currently Male'] = 'V současnosti muž';
$a->strings['Currently Female'] = 'V současnosti žena';
$a->strings['Mostly Male'] = 'Z větší části muž';
$a->strings['Mostly Female'] = 'Z větší části žena';
$a->strings['Transgender'] = 'Transgender';
$a->strings['Intersex'] = 'Intersexuál';
$a->strings['Transsexual'] = 'Transsexuál';
$a->strings['Hermaphrodite'] = 'Hermafrodit';
$a->strings['Neuter'] = 'Střední rod';
$a->strings['Non-specific'] = 'Nespecifikováno';
$a->strings['Other'] = 'Jiné';
$a->strings['Males'] = 'Muži';
$a->strings['Females'] = 'Ženy';
$a->strings['Gay'] = 'Gay';
$a->strings['Lesbian'] = 'Lesba';
$a->strings['No Preference'] = 'Bez preferencí';
$a->strings['Bisexual'] = 'Bisexuál';
$a->strings['Autosexual'] = 'Autosexuál';
$a->strings['Abstinent'] = 'Abstinent';
$a->strings['Virgin'] = 'Panic/panna';
$a->strings['Deviant'] = 'Deviant';
$a->strings['Fetish'] = 'Fetišista';
$a->strings['Oodles'] = 'Hodně';
$a->strings['Nonsexual'] = 'Nesexuální';
$a->strings['Single'] = 'Svobodný/á';
$a->strings['Lonely'] = 'Osamělý/á';
$a->strings['In a relation'] = 'Ve vztahu';
$a->strings['Has crush'] = 'Zamilovaný/á';
$a->strings['Infatuated'] = 'Zabouchnutý/á';
$a->strings['Dating'] = 'Chodím s někým';
$a->strings['Unfaithful'] = 'Nevěrný/á';
$a->strings['Sex Addict'] = 'Posedlý/á sexem';
$a->strings['Friends'] = 'Přátelé';
$a->strings['Friends/Benefits'] = 'Přátelé/výhody';
$a->strings['Casual'] = 'Ležérní';
$a->strings['Engaged'] = 'Zadaný/á';
$a->strings['Married'] = 'Ženatý/vdaná';
$a->strings['Imaginarily married'] = 'Pomyslně ženatý/vdaná';
$a->strings['Partners'] = 'Partneři';
$a->strings['Cohabiting'] = 'Žiji ve společné domácnosti';
$a->strings['Common law'] = 'Zvykové právo';
$a->strings['Happy'] = 'Šťastný/á';
$a->strings['Not looking'] = 'Nehledající';
$a->strings['Swinger'] = 'Swinger';
$a->strings['Betrayed'] = 'Zrazen/a';
$a->strings['Separated'] = 'Odloučený/á';
$a->strings['Unstable'] = 'Nestálý/á';
$a->strings['Divorced'] = 'Rozvedený/á';
$a->strings['Imaginarily divorced'] = 'Pomyslně rozvedený/á';
$a->strings['Widowed'] = 'Ovdovělý/á';
$a->strings['Uncertain'] = 'Nejistý/á';
$a->strings['It\'s complicated'] = 'Je to složité';
$a->strings['Don\'t care'] = 'Nezájem';
$a->strings['Ask me'] = 'Zeptej se mě';
$a->strings['There are no tables on MyISAM.'] = 'V MyISAM nejsou žádné tabulky.';
$a->strings['
Error %d occurred during database update:
%s
'] = '
Při aktualizaci databáze se vyskytla chyba %d:
%s
';
$a->strings['Errors encountered performing database changes: '] = 'Při vykonávání změn v databázi se vyskytly chyby: ';
$a->strings['%s: Database update'] = '%s: Aktualizace databáze';
$a->strings['%s: updating %s table.'] = '%s: aktualizuji tabulku %s';
$a->strings['Filesystem storage failed to create "%s". Check you write permissions.'] = 'Vytvoření „%s“ v úložišti souborového systému neuspělo. Zkontrolujte vaše povolení zapisovat.';
$a->strings['Filesystem storage failed to save data to "%s". Check your write permissions'] = 'Uložení dat do „%s“ v úložišti souborového systému neuspělo. Zkontrolujte vaše povolení zapisovat';
$a->strings['Storage base path'] = 'Cesta ke kořenové složce úložiště';
$a->strings['Folder where uploaded files are saved. For maximum security, This should be a path outside web server folder tree'] = 'Složka, do které jsou ukládány nahrané soubory. Pro maximální bezpečnost to musí být cesta mimo složku webového serveru';
$a->strings['Enter a valid existing folder'] = 'Zadejte platnou existující složku';
$a->strings['Database storage failed to update %s'] = 'Aktualizace %s v úložišti databáze neuspěla';
$a->strings['Database storage failed to insert data'] = 'Vklad dat do databázového úložiště neuspěl';
$a->strings['l F d, Y \@ g:i A'] = 'l d. F, Y v g:i A';
$a->strings['Starts:'] = 'Začíná:';
$a->strings['Finishes:'] = 'Končí:';
$a->strings['all-day'] = 'celodenní';
$a->strings['Sept'] = 'září';
$a->strings['No events to display'] = 'Žádné události k zobrazení';
$a->strings['l, F j'] = 'l, j. F';
$a->strings['Edit event'] = 'Upravit událost';
$a->strings['Duplicate event'] = 'Duplikovat událost';
$a->strings['Delete event'] = 'Smazat událost';
$a->strings['link to source'] = 'odkaz na zdroj';
$a->strings['D g:i A'] = 'D g:i A';
$a->strings['g:i A'] = 'g:i A';
$a->strings['Show map'] = 'Zobrazit mapu';
$a->strings['Hide map'] = 'Skrýt mapu';
$a->strings['%s\'s birthday'] = '%s má narozeniny';
$a->strings['Happy Birthday %s'] = 'Veselé narozeniny, %s';
$a->strings['Item filed'] = 'Položka vyplněna';
$a->strings['Login failed'] = 'Přihlášení selhalo';
$a->strings['Not enough information to authenticate'] = 'Není dost informací pro autentikaci';
$a->strings['Password can\'t be empty'] = 'Heslo nemůže být prázdné';
$a->strings['Empty passwords are not allowed.'] = 'Prázdná hesla nejsou povolena.';
$a->strings['The new password has been exposed in a public data dump, please choose another.'] = 'Nové heslo bylo zveřejněno ve veřejném výpisu dat, prosím zvolte si jiné.';
$a->strings['The password can\'t contain accentuated letters, white spaces or colons (:)'] = 'Heslo nesmí obsahovat mezery, znaky s diakritikou a dvojtečky (:)';
$a->strings['Passwords do not match. Password unchanged.'] = 'Hesla se neshodují. Heslo nebylo změněno.';
$a->strings['An invitation is required.'] = 'Je vyžadována pozvánka.';
$a->strings['Invitation could not be verified.'] = 'Pozvánka nemohla být ověřena.';
$a->strings['Invalid OpenID url'] = 'Neplatný odkaz OpenID';
$a->strings['We encountered a problem while logging in with the OpenID you provided. Please check the correct spelling of the ID.'] = 'Zaznamenali jsme problém s vaším přihlášením prostřednictvím Vámi zadaným OpenID. Prosím ověřte si, že jste ID zadali správně. ';
$a->strings['The error message was:'] = 'Chybová zpráva byla:';
$a->strings['Please enter the required information.'] = 'Zadejte prosím požadované informace.';
$a->strings['system.username_min_length (%s) and system.username_max_length (%s) are excluding each other, swapping values.'] = 'system.username_min_length (%s) a system.username_max_length (%s) se vzájemně vylučují, čímž se vyměňují hodnoty.';
$a->strings['Username should be at least %s character.'] = [
	0 => 'Uživateleké jméno musí mít alespoň %s znak.',
	1 => 'Uživateleké jméno musí mít alespoň %s znaky.',
	2 => 'Uživateleké jméno musí mít alespoň %s znaku.',
	3 => 'Uživateleké jméno musí mít alespoň %s znaků.',
];
$a->strings['Username should be at most %s character.'] = [
	0 => 'Uživateleké jméno musí mít nanejvýš %s znak.',
	1 => 'Uživateleké jméno musí mít nanejvýš %s znaky.',
	2 => 'Uživateleké jméno musí mít nanejvýš %s znaku.',
	3 => 'Uživateleké jméno musí mít nanejvýš %s znaků.',
];
$a->strings['That doesn\'t appear to be your full (First Last) name.'] = 'Nezdá se, že by to bylo vaše celé jméno (křestní jméno a příjmení).';
$a->strings['Your email domain is not among those allowed on this site.'] = 'Vaše e-mailová doména není na tomto serveru mezi povolenými.';
$a->strings['Not a valid email address.'] = 'Neplatná e-mailová adresa.';
$a->strings['The nickname was blocked from registration by the nodes admin.'] = 'Administrátor serveru zablokoval registraci této přezdívky.';
$a->strings['Cannot use that email.'] = 'Tento e-mail nelze použít.';
$a->strings['Your nickname can only contain a-z, 0-9 and _.'] = 'Uživatelské jméno může obsahovat pouze znaky a-z, 0-9 a _.';
$a->strings['Nickname is already registered. Please choose another.'] = 'Přezdívka je již registrována. Prosím vyberte jinou.';
$a->strings['SERIOUS ERROR: Generation of security keys failed.'] = 'ZÁVAŽNÁ CHYBA: Generování bezpečnostních klíčů se nezdařilo.';
$a->strings['An error occurred during registration. Please try again.'] = 'Došlo k chybě při registraci. Zkuste to prosím znovu.';
$a->strings['An error occurred creating your default profile. Please try again.'] = 'Při vytváření vašeho výchozího profilu došlo k chybě. Zkuste to prosím znovu.';
$a->strings['An error occurred creating your self contact. Please try again.'] = 'Při vytváření vašeho kontaktu na sebe došlo k chybě. Zkuste to prosím znovu.';
$a->strings['An error occurred creating your default contact group. Please try again.'] = 'Při vytváření vaší výchozí skupiny kontaktů došlo k chybě. Zkuste to prosím znovu.';
$a->strings['
			Dear %1$s,
				Thank you for registering at %2$s. Your account is pending for approval by the administrator.

			Your login details are as follows:

			Site Location:	%3$s
			Login Name:		%4$s
			Password:		%5$s
		'] = '
			Vážený/á %1$s,
				Děkujeme, že jste se registroval/a na %2$s. Váš účet čeká na schválení administrátora.

			Zde jsou vaše přihlašovací detaily:

			Adresa stránky:		%3$s
			Přihlašovací jméno:	%4$s
			Heslo:			%5$s
		';
$a->strings['Registration at %s'] = 'Registrace na %s';
$a->strings['
			Dear %1$s,
				Thank you for registering at %2$s. Your account has been created.
		'] = '
			Vážený/á %1$s,
				Děkujeme, že jste se registroval/a na %2$s. Váš účet byl vytvořen.
		';
$a->strings['
			The login details are as follows:

			Site Location:	%3$s
			Login Name:		%1$s
			Password:		%5$s

			You may change your password from your account "Settings" page after logging
			in.

			Please take a few moments to review the other account settings on that page.

			You may also wish to add some basic information to your default profile
			(on the "Profiles" page) so that other people can easily find you.

			We recommend setting your full name, adding a profile photo,
			adding some profile "keywords" (very useful in making new friends) - and
			perhaps what country you live in; if you do not wish to be more specific
			than that.

			We fully respect your right to privacy, and none of these items are necessary.
			If you are new and do not know anybody here, they may help
			you to make some new and interesting friends.

			If you ever want to delete your account, you can do so at %3$s/removeme

			Thank you and welcome to %2$s.'] = '
			Zde jsou vaše přihlašovací detaily:

			Adresa stránky:		%3$s
			Přihlašovací jméno:	%1$s
			Heslo:			%5$s

			Své heslo si po přihlášení můžete změnit na stránce „Nastavení“ vašeho
			účtu.

			Prosím, prohlédněte si na chvilku ostatní nastavení účtu na této stránce.

			Možná byste si také přál/a přidat pár základních informací na svůj výchozí
			profil (na stránce „Profily“) aby vás další lidé mohli snadno najít.
			Doporučujeme nastavit si vaše celé jméno, přidat profilovou fotku,
			přidat pár „klíčových slov“ k profilu (velmi užitečné při získávání nových
			přátel) - a možná v jaké zemi žijete; pokud nechcete být konkrétnější.

			Zcela respektujeme vaše právo na soukromí a žádnou z těchto položek
			není potřeba vyplňovat. Pokud jste zde nový/á a nikoho zde neznáte, mohou vám
			pomoci si získat nové a zajímavé přátele.
			Pokud byste si někdy přál/a smazat účet, můžete tak učinit na stránce
			%3$s/removeme.

			Děkujeme vám a vítáme vás na %2$s.';
$a->strings['Registration details for %s'] = 'Registrační údaje pro uživatele %s';
$a->strings['Drop Contact'] = 'Odstranit kontakt';
$a->strings['Organisation'] = 'Organizace';
$a->strings['News'] = 'Zprávy';
$a->strings['Forum'] = 'Fórum';
$a->strings['Connect URL missing.'] = 'Chybí URL adresa pro připojení.';
$a->strings['The contact could not be added. Please check the relevant network credentials in your Settings -> Social Networks page.'] = 'Kontakt nemohl být přidán. Prosím zkontrolujte relevantní přihlašovací údaje sítě na stránce Nastavení -> Sociální sítě.';
$a->strings['This site is not configured to allow communications with other networks.'] = 'Tento web není nakonfigurován tak, aby umožňoval komunikaci s ostatními sítěmi.';
$a->strings['No compatible communication protocols or feeds were discovered.'] = 'Nenalezen žádný kompatibilní komunikační protokol nebo kanál.';
$a->strings['The profile address specified does not provide adequate information.'] = 'Uvedená adresa profilu neposkytuje dostatečné informace.';
$a->strings['An author or name was not found.'] = 'Autor nebo jméno nenalezeno';
$a->strings['No browser URL could be matched to this address.'] = 'Této adrese neodpovídá žádné URL prohlížeče.';
$a->strings['Unable to match @-style Identity Address with a known protocol or email contact.'] = 'Není možné namapovat adresu identity ve stylu @ s žádným možným protokolem ani emailovým kontaktem.';
$a->strings['Use mailto: in front of address to force email check.'] = 'Použite mailo: před adresou k vynucení emailové kontroly.';
$a->strings['The profile address specified belongs to a network which has been disabled on this site.'] = 'Zadaná adresa profilu patří do sítě, která  byla na tomto serveru zakázána.';
$a->strings['Limited profile. This person will be unable to receive direct/personal notifications from you.'] = 'Omezený profil. Tato osoba nebude schopna od vás přijímat přímá/osobní oznámení.';
$a->strings['Unable to retrieve contact information.'] = 'Nepodařilo se získat kontaktní informace.';
$a->strings['A deleted group with this name was revived. Existing item permissions <strong>may</strong> apply to this group and any future members. If this is not what you intended, please create another group with a different name.'] = 'Dříve smazaná skupina s tímto jménem byla obnovena. Stávající oprávnění <strong>může</strong> ovlivnit tuto skupinu a její budoucí členy. Pokud to není to, co jste chtěl/a, vytvořte, prosím, další skupinu s jiným názvem.';
$a->strings['Default privacy group for new contacts'] = 'Výchozí soukromá skupina pro nové kontakty.';
$a->strings['Everybody'] = 'Všichni';
$a->strings['edit'] = 'upravit';
$a->strings['Groups'] = 'Skupiny';
$a->strings['Edit group'] = 'Upravit skupinu';
$a->strings['Contacts not in any group'] = 'Kontakty, které nejsou v žádné skupině';
$a->strings['Create a new group'] = 'Vytvořit novou skupinu';
$a->strings['Group Name: '] = 'Název skupiny: ';
$a->strings['Edit groups'] = 'Upravit skupiny';
$a->strings['[no subject]'] = '[bez předmětu]';
$a->strings['Edit profile'] = 'Upravit profil';
$a->strings['Manage/edit profiles'] = 'Spravovat/upravit profily';
$a->strings['Status:'] = 'Stav:';
$a->strings['Homepage:'] = 'Domovská stránka:';
$a->strings['XMPP:'] = 'XMPP:';
$a->strings['Unfollow'] = 'Přestat sledovat';
$a->strings['Atom feed'] = 'Kanál Atom';
$a->strings['g A l F d'] = 'g A, l d. F';
$a->strings['F d'] = 'd. F';
$a->strings['[today]'] = '[dnes]';
$a->strings['Birthday Reminders'] = 'Připomínka narozenin';
$a->strings['Birthdays this week:'] = 'Narozeniny tento týden:';
$a->strings['[No description]'] = '[Žádný popis]';
$a->strings['Event Reminders'] = 'Připomenutí událostí';
$a->strings['Upcoming events the next 7 days:'] = 'Nadcházející události v příštích 7 dnech:';
$a->strings['Member since:'] = 'Členem od:';
$a->strings['j F, Y'] = 'j F, Y';
$a->strings['j F'] = 'j F';
$a->strings['Age:'] = 'Věk:';
$a->strings['for %1$d %2$s'] = '%1$d %2$s';
$a->strings['Religion:'] = 'Náboženství:';
$a->strings['Hobbies/Interests:'] = 'Koníčky/zájmy:';
$a->strings['Contact information and Social Networks:'] = 'Kontaktní informace a sociální sítě:';
$a->strings['Musical interests:'] = 'Hudební vkus:';
$a->strings['Books, literature:'] = 'Knihy, literatura:';
$a->strings['Television:'] = 'Televize:';
$a->strings['Film/dance/culture/entertainment:'] = 'Film/tanec/kultura/zábava:';
$a->strings['Love/Romance:'] = 'Láska/romantika';
$a->strings['Work/employment:'] = 'Práce/zaměstnání:';
$a->strings['School/education:'] = 'Škola/vzdělávání:';
$a->strings['Forums:'] = 'Fóra';
$a->strings['Profile Details'] = 'Detaily profilu';
$a->strings['Only You Can See This'] = 'Toto můžete vidět jen vy';
$a->strings['Tips for New Members'] = 'Tipy pro nové členy';
$a->strings['OpenWebAuth: %1$s welcomes %2$s'] = 'OpenWebAuth: %1$s vítá uživatele %2$s';
$a->strings['activity'] = 'aktivita';
$a->strings['comment'] = [
	0 => 'komentář',
	1 => 'komentáře',
	2 => 'komentáře',
	3 => 'komentářů',
];
$a->strings['post'] = 'příspěvek';
$a->strings['Content warning: %s'] = 'Varování o obsahu: %s';
$a->strings['bytes'] = 'bytů';
$a->strings['View on separate page'] = 'Zobrazit na separátní stránce';
$a->strings['view on separate page'] = 'zobrazit na separátní stránce';
$a->strings['%s\'s timeline'] = 'Časová osa uživatele %s';
$a->strings['%s\'s posts'] = 'Příspěvky uživatele %s';
$a->strings['%s\'s comments'] = 'Komentáře uživatele %s';
$a->strings['%s is now following %s.'] = '%s nyní sleduje %s.';
$a->strings['following'] = 'sleduje';
$a->strings['%s stopped following %s.'] = '%s přestal/a sledovat uživatele %s.';
$a->strings['stopped following'] = 'přestal/a sledovat';
$a->strings['Sharing notification from Diaspora network'] = 'Oznámení o sdílení ze sítě Diaspora';
$a->strings['Attachments:'] = 'Přílohy:';
$a->strings['(no subject)'] = '(bez předmětu)';
$a->strings['At the time of registration, and for providing communications between the user account and their contacts, the user has to provide a display name (pen name), an username (nickname) and a working email address. The names will be accessible on the profile page of the account by any visitor of the page, even if other profile details are not displayed. The email address will only be used to send the user notifications about interactions, but wont be visibly displayed. The listing of an account in the node\'s user directory or the global user directory is optional and can be controlled in the user settings, it is not necessary for communication.'] = 'Ve chvíli registrace, a pro poskytování komunikace mezi uživatelským účtem a jeho kontakty, musí uživatel poskytnout zobrazované jméno (pseudonym), uživatelské jméno (přezdívku) a funkční e-mailovou adresu. Jména budou dostupná na profilové stránce účtu pro kteréhokoliv návštěvníka, i kdyby ostatní detaily nebyly zobrazeny. E-mailová adresa bude použita pouze pro zasílání oznámení o interakcích, nebude ale viditelně zobrazována. Zápis účtu do adresáře účtů serveru nebo globálního adresáře účtů je nepovinný a může být ovládán v nastavení uživatele, není potřebný pro komunikaci.';
$a->strings['This data is required for communication and is passed on to the nodes of the communication partners and is stored there. Users can enter additional private data that may be transmitted to the communication partners accounts.'] = 'Tato data jsou vyžadována ke komunikaci a jsou předávána serverům komunikačních partnerů a jsou tam ukládána. Uživatelé mohou zadávat dodatečná soukromá data, která mohou být odeslána na účty komunikačních partnerů.';
$a->strings['At any point in time a logged in user can export their account data from the <a href="%1$s/settings/uexport">account settings</a>. If the user wants to delete their account they can do so at <a href="%1$s/removeme">%1$s/removeme</a>. The deletion of the account will be permanent. Deletion of the data will also be requested from the nodes of the communication partners.'] = 'Přihlášený uživatel si kdykoliv může exportovat svoje data účtu z <a href="%1$s/settings/uexport">nastavení účtu</a>. Pokud by chtěl uživatel svůj účet smazat, může tak učinit na stránce <a href="%1$s/removeme">%1$s/removeme</a>. Smazání účtu bude trvalé. Na serverech komunikačních partnerů bude zároveň vyžádáno smazání dat.';
$a->strings['Privacy Statement'] = 'Prohlášení o soukromí';
$a->strings['No installed applications.'] = 'Žádné nainstalované aplikace.';
$a->strings['Applications'] = 'Aplikace';
$a->strings['Credits'] = 'Poděkování';
$a->strings['Friendica is a community project, that would not be possible without the help of many people. Here is a list of those who have contributed to the code or the translation of Friendica. Thank you all!'] = 'Friendica je komunitní projekt, který by nebyl možný bez pomoci mnoha lidí. Zde je seznam těch, kteří přispěli ke kódu nebo k překladu Friendica. Děkujeme všem!';
$a->strings['Addon not found.'] = 'Doplněk nenalezen.';
$a->strings['Addon %s disabled.'] = 'Doplněk %s zakázán.';
$a->strings['Addon %s enabled.'] = 'Doplněk %s povolen.';
$a->strings['Disable'] = 'Zakázat';
$a->strings['Enable'] = 'Povolit';
$a->strings['Administration'] = 'Administrace';
$a->strings['Toggle'] = 'Přepnout';
$a->strings['Author: '] = 'Autor: ';
$a->strings['Maintainer: '] = 'Správce: ';
$a->strings['Addon %s failed to install.'] = 'Instalace doplňku %s selhala.';
$a->strings['Reload active addons'] = 'Znovu načíst aktivní doplňky';
$a->strings['There are currently no addons available on your node. You can find the official addon repository at %1$s and might find other interesting addons in the open addon registry at %2$s'] = 'Aktuálně nejsou na Vašem serveru k dispozici žádné doplňky. Oficiální repozitář doplňků najdete na %1$s a další zajímavé doplňky můžete najít v otevřeném registru doplňků na %2$s';
$a->strings['The contact has been blocked from the node'] = 'Kontakt byl na serveru zablokován';
$a->strings['Could not find any contact entry for this URL (%s)'] = 'Nelze nalézt žádnou položku v kontaktech pro tuto URL adresu (%s)';
$a->strings['%s contact unblocked'] = [
	0 => '%s kontakt odblokován',
	1 => '%s kontakty odblokovány',
	2 => '%s kontaktu odblokováno',
	3 => '%s kontaktů odblokováno',
];
$a->strings['Remote Contact Blocklist'] = 'Blokované vzdálené kontakty';
$a->strings['This page allows you to prevent any message from a remote contact to reach your node.'] = 'Tato stránka vám umožňuje zabránit jakýmkoliv zprávám ze vzdáleného kontaktu, aby se k vašemu serveru dostaly.';
$a->strings['Block Remote Contact'] = 'Zablokovat vzdálený kontakt';
$a->strings['select all'] = 'Vybrat vše';
$a->strings['select none'] = 'nevybrat žádný';
$a->strings['Unblock'] = 'Odblokovat';
$a->strings['No remote contact is blocked from this node.'] = 'Žádný vzdálený kontakt není na tomto serveru zablokován.';
$a->strings['Blocked Remote Contacts'] = 'Zablokované vzdálené kontakty';
$a->strings['Block New Remote Contact'] = 'Zablokovat nový vzdálený kontakt';
$a->strings['Photo'] = 'Fotka';
$a->strings['Reason'] = 'Důvod';
$a->strings['%s total blocked contact'] = [
	0 => 'Celkem %s zablokovaný kontakt',
	1 => 'Celkem %s zablokované kontakty',
	2 => 'Celkem %s zablokovaného kontaktu',
	3 => 'Celkem %s zablokovaných kontaktů',
];
$a->strings['URL of the remote contact to block.'] = 'Adresa URL vzdáleného kontaktu k zablokování.';
$a->strings['Block Reason'] = 'Důvod blokace';
$a->strings['Site blocklist updated.'] = 'Blokovací seznam stránky aktualizován';
$a->strings['Reason for the block'] = 'Důvody pro zablokování';
$a->strings['Check to delete this entry from the blocklist'] = 'Zaškrtnutím odstraníte tuto položku z blokovacího seznamu';
$a->strings['Add new entry to block list'] = 'Přidat na blokovací seznam novou položku';
$a->strings['Block reason'] = 'Důvod zablokování';
$a->strings['Add Entry'] = 'Přidat položku';
$a->strings['Save changes to the blocklist'] = 'Uložit změny do blokovacího seznamu';
$a->strings['Current Entries in the Blocklist'] = 'Aktuální položky v bokovacím seznamu';
$a->strings['Delete entry from blocklist'] = 'Odstranit položku z blokovacího seznamu';
$a->strings['Delete entry from blocklist?'] = 'Odstranit položku z blokovacího seznamu?';
$a->strings['Update has been marked successful'] = 'Aktualizace byla označena jako úspěšná.';
$a->strings['Database structure update %s was successfully applied.'] = 'Aktualizace struktury databáze %s byla úspěšně aplikována.';
$a->strings['Executing of database structure update %s failed with error: %s'] = 'Provádění aktualizace databáze %s selhalo s chybou: %s';
$a->strings['Executing %s failed with error: %s'] = 'Vykonávání %s selhalo s chybou: %s';
$a->strings['Update %s was successfully applied.'] = 'Aktualizace %s byla úspěšně aplikována.';
$a->strings['Update %s did not return a status. Unknown if it succeeded.'] = 'Aktualizace %s nevrátila žádný stav. Není zřejmé, jestli byla úspěšná.';
$a->strings['There was no additional update function %s that needed to be called.'] = 'Nebyla nalezena žádná další aktualizační funkce %s která by měla být volána.';
$a->strings['No failed updates.'] = 'Žádné neúspěšné aktualizace.';
$a->strings['Check database structure'] = 'Ověřit strukturu databáze';
$a->strings['Failed Updates'] = 'Neúspěšné aktualizace';
$a->strings['This does not include updates prior to 1139, which did not return a status.'] = 'To nezahrnuje aktualizace do verze 1139, které nevracejí žádný status.';
$a->strings['Mark success (if update was manually applied)'] = 'Označit za úspěšné (pokud byla aktualizace aplikována manuálně)';
$a->strings['Attempt to execute this update step automatically'] = 'Pokusit se provést tuto aktualizaci automaticky.';
$a->strings['Lock feature %s'] = 'Uzamknout vlastnost %s';
$a->strings['Manage Additional Features'] = 'Spravovat další funkce';
$a->strings['unknown'] = 'neznámé';
$a->strings['This page offers you some numbers to the known part of the federated social network your Friendica node is part of. These numbers are not complete but only reflect the part of the network your node is aware of.'] = 'Tato stránka vám nabízí pár čísel pro známou část federované sociální sítě, které je váš server Friendica součástí. Tato čísla nejsou kompletní, ale pouze odrážejí část sítě, které si je Váš server vědom.';
$a->strings['The <em>Auto Discovered Contact Directory</em> feature is not enabled, it will improve the data displayed here.'] = 'Funkce <em>Adresář automaticky objevených kontaktů</em> není zapnuta, zlepší zde zobrazená data.';
$a->strings['Federation Statistics'] = 'Statistiky Federation';
$a->strings['Currently this node is aware of %d nodes with %d registered users from the following platforms:'] = 'Aktuálně si je tento server vědom %d serverů s %d registrovanými uživateli z těchto platforem:';
$a->strings['Item marked for deletion.'] = 'Položka označená ke smazání';
$a->strings['Delete Item'] = 'Smazat položku';
$a->strings['Delete this Item'] = 'Smazat tuto položku';
$a->strings['On this page you can delete an item from your node. If the item is a top level posting, the entire thread will be deleted.'] = 'Na této stránce můžete smazat položku z vašeho serveru. Pokud je položkou příspěvek nejvyššího stupně, bude smazáno celé vlákno.';
$a->strings['You need to know the GUID of the item. You can find it e.g. by looking at the display URL. The last part of http://example.com/display/123456 is the GUID, here 123456.'] = 'Budete muset znát číslo GUID položky. Můžete jej najít např. v adrese URL. Poslední část adresy http://priklad.cz/display/123456 je GUID, v tomto případě 123456';
$a->strings['GUID'] = 'GUID';
$a->strings['The GUID of the item you want to delete.'] = 'Číslo GUID položky, kterou chcete smazat';
$a->strings['Item Guid'] = 'Číslo GUID položky';
$a->strings['The logfile \'%s\' is not writable. No logging possible'] = 'Záznamový soubor „%s“ není zapisovatelný. Zaznamenávání není možno.';
$a->strings['Log settings updated.'] = 'Nastavení záznamů aktualizována.';
$a->strings['PHP log currently enabled.'] = 'PHP záznamy jsou aktuálně povolené.';
$a->strings['PHP log currently disabled.'] = 'PHP záznamy jsou aktuálně zakázané.';
$a->strings['Logs'] = 'Záznamy';
$a->strings['Clear'] = 'Vyčistit';
$a->strings['Enable Debugging'] = 'Povolit ladění';
$a->strings['Log file'] = 'Soubor se záznamem';
$a->strings['Must be writable by web server. Relative to your Friendica top-level directory.'] = 'Musí být zapisovatelný webovým serverem. Cesta relativní k vašemu kořenovému adresáři Friendica.';
$a->strings['Log level'] = 'Úroveň auditu';
$a->strings['PHP logging'] = 'Záznamování PHP';
$a->strings['To temporarily enable logging of PHP errors and warnings you can prepend the following to the index.php file of your installation. The filename set in the \'error_log\' line is relative to the friendica top-level directory and must be writeable by the web server. The option \'1\' for \'log_errors\' and \'display_errors\' is to enable these options, set to \'0\' to disable them.'] = 'Pro dočasné umožnění zaznamenávání PHP chyb a varování, můžete přidat do souboru index.php na vaší instalaci následující: Název souboru nastavený v řádku „error_log“ je relativní ke kořenovému adresáři Friendica a webový server musí mít povolení na něj zapisovat. Možnost „1“ pro „log_errors“ a „display_errors“ tyto funkce povoluje, nastavením hodnoty na „0“ je zakážete. ';
$a->strings['Error trying to open <strong>%1$s</strong> log file.\r\n<br/>Check to see if file %1$s exist and is readable.'] = 'Chyba při otevírání záznamu <strong>%1$s</strong>.\r\n<br/>Zkontrolujte, jestli soubor %1$s existuje a může se číst.';
$a->strings['Couldn\'t open <strong>%1$s</strong> log file.\r\n<br/>Check to see if file %1$s is readable.'] = 'Nelze otevřít záznam <strong>%1$s</strong>.\r\n<br/>Zkontrolujte, jestli se soubor %1$s může číst.';
$a->strings['View Logs'] = 'Zobrazit záznamy';
$a->strings['Theme settings updated.'] = 'Nastavení motivu bylo aktualizováno.';
$a->strings['Theme %s disabled.'] = 'Motiv %s zakázán.';
$a->strings['Theme %s successfully enabled.'] = 'Motiv %s úspěšně povolen.';
$a->strings['Theme %s failed to install.'] = 'Instalace motivu %s selhala.';
$a->strings['Screenshot'] = 'Snímek obrazovky';
$a->strings['Themes'] = 'Motivy';
$a->strings['Unknown theme.'] = 'Neznámý motiv.';
$a->strings['Reload active themes'] = 'Znovu načíst aktivní motivy';
$a->strings['No themes found on the system. They should be placed in %1$s'] = 'V systému nebyly nalezeny žádné motivy. Měly by být uloženy v %1$s';
$a->strings['[Experimental]'] = '[Experimentální]';
$a->strings['[Unsupported]'] = '[Nepodporováno]';
$a->strings['The Terms of Service settings have been updated.'] = 'Nastavení Podmínek používání byla aktualizována.';
$a->strings['Display Terms of Service'] = 'Zobrazit Podmínky používání';
$a->strings['Enable the Terms of Service page. If this is enabled a link to the terms will be added to the registration form and the general information page.'] = 'Povolí stránku Podmínky používání. Pokud je toto povoleno, bude na formulář pro registrací a stránku s obecnými informacemi přidán odkaz k podmínkám.';
$a->strings['Display Privacy Statement'] = 'Zobrazit Prohlášení o soukromí';
$a->strings['Show some informations regarding the needed information to operate the node according e.g. to <a href="%s" target="_blank">EU-GDPR</a>.'] = 'Ukázat některé informace ohledně potřebných informací k provozování serveru podle například <a href="%s" target="_blank">Obecného nařízení o ochraně osobních údajů EU (GDPR)</a>';
$a->strings['Privacy Statement Preview'] = 'Náhled Prohlášení o soukromí';
$a->strings['The Terms of Service'] = 'Podmínky používání';
$a->strings['Enter the Terms of Service for your node here. You can use BBCode. Headers of sections should be [h2] and below.'] = 'Zde zadejte podmínky používání vašeho serveru. Můžete používat BBCode. Záhlaví sekcí by měly být označeny [h2] a níže.';
$a->strings['
			Dear %1$s,
				the administrator of %2$s has set up an account for you.'] = '
			Vážený/á %1$s,
				administrátor %2$s pro Vás vytvořil uživatelský účet.';
$a->strings['
			The login details are as follows:

			Site Location:	%1$s
			Login Name:		%2$s
			Password:		%3$s

			You may change your password from your account "Settings" page after logging
			in.

			Please take a few moments to review the other account settings on that page.

			You may also wish to add some basic information to your default profile
			(on the "Profiles" page) so that other people can easily find you.

			We recommend setting your full name, adding a profile photo,
			adding some profile "keywords" (very useful in making new friends) - and
			perhaps what country you live in; if you do not wish to be more specific
			than that.

			We fully respect your right to privacy, and none of these items are necessary.
			If you are new and do not know anybody here, they may help
			you to make some new and interesting friends.

			If you ever want to delete your account, you can do so at %1$s/removeme

			Thank you and welcome to %4$s.'] = '
			Zde jsou vaše přihlašovací detaily:

			Adresa stránky:		%1$s
			Přihlašovací jméno:	%2$s
			Heslo:			%3$s

			Své heslo si po přihlášení můžete změnit na stránce „Nastavení“ vašeho
			účtu.

			Prosím, prohlédněte si na chvilku ostatní nastavení účtu na této stránce.

			Možná byste si také přál/a přidat pár základních informací na svůj výchozí
			profil (na stránce „Profily“) aby vás další lidé mohli snadno najít.
			Doporučujeme nastavit si Vaše celé jméno, přidat profilovou fotku,
			přidat pár „klíčových slov“ k profilu (velmi užitečné při získávání nových
			přátel) - a možná v jaké zemi žijete; pokud nechcete být konkrétnější.

			Zcela respektujeme vaše právo na soukromí a žádnou z těchto položek
			není potřeba vyplňovat. Pokud jste zde nový/á a nikoho zde neznáte, mohou vám
			pomoci si získat nové a zajímavé přátele.
			Pokud byste si někdy přál/a smazat účet, můžete tak učinit na stránce
			%1$s/removeme.

			Děkujeme vám a vítáme vás na %4$s.';
$a->strings['%s user blocked'] = [
	0 => '%s uživatel blokován',
	1 => '%s uživatelé blokování',
	2 => '%s uživatele blokováno',
	3 => '%s uživatelů blokováno',
];
$a->strings['%s user unblocked'] = [
	0 => '%s uživatel odblokován',
	1 => '%s uživatelé odblokováni',
	2 => '%s uživatele odblokováno',
	3 => '%s uživatelů odblokováno',
];
$a->strings['You can\'t remove yourself'] = 'Nemůžete odstranit sebe sama';
$a->strings['%s user deleted'] = [
	0 => '%s uživatel smazán',
	1 => '%s uživatelů smazáno',
	2 => '%s uživatele smazáno',
	3 => '%s uživatelů smazáno',
];
$a->strings['User "%s" deleted'] = 'Uživatel „%s“ smazán';
$a->strings['User "%s" blocked'] = 'Uživatel „%s“ zablokován';
$a->strings['User "%s" unblocked'] = 'Uživatel „%s“ odblokován';
$a->strings['Private Forum'] = 'Soukromé fórum';
$a->strings['Relay'] = 'Přeposílací server';
$a->strings['Register date'] = 'Datum registrace';
$a->strings['Last login'] = 'Datum posledního přihlášení';
$a->strings['Last item'] = 'Poslední položka';
$a->strings['Type'] = 'Typ';
$a->strings['Users'] = 'Uživatelé';
$a->strings['Add User'] = 'Přidat uživatele';
$a->strings['User registrations waiting for confirm'] = 'Registrace uživatelů čekající na potvrzení';
$a->strings['User waiting for permanent deletion'] = 'Uživatel čekající na trvalé smazání';
$a->strings['Request date'] = 'Datum požadavku';
$a->strings['No registrations.'] = 'Žádné registrace.';
$a->strings['Note from the user'] = 'Poznámka od uživatele';
$a->strings['Deny'] = 'Odmítnout';
$a->strings['User blocked'] = 'Uživatel zablokován';
$a->strings['Site admin'] = 'Administrátor webu';
$a->strings['Account expired'] = 'Účtu vypršela platnost';
$a->strings['New User'] = 'Nový uživatel';
$a->strings['Permanent deletion'] = 'Trvalé smazání';
$a->strings['Selected users will be deleted!\n\nEverything these users had posted on this site will be permanently deleted!\n\nAre you sure?'] = 'Vybraní uživatelé budou smazáni!\n\n Vše, co tito uživatelé na těchto stránkách vytvořili, bude trvale odstraněno!\n\nOpravdu chcete pokračovat?';
$a->strings['The user {0} will be deleted!\n\nEverything this user has posted on this site will be permanently deleted!\n\nAre you sure?'] = 'Uživatel {0} bude smazán!\n\n Vše, co tento uživatel na těchto stránkách vytvořil, bude trvale odstraněno!\n\n Opravdu chcete pokračovat?';
$a->strings['Name of the new user.'] = 'Jméno nového uživatele.';
$a->strings['Nickname'] = 'Přezdívka';
$a->strings['Nickname of the new user.'] = 'Přezdívka nového uživatele.';
$a->strings['Email address of the new user.'] = 'Emailová adresa nového uživatele.';
$a->strings['Inspect Deferred Worker Queue'] = 'Prozkoumat frontu odložených pracovníků';
$a->strings['This page lists the deferred worker jobs. This are jobs that couldn\'t be executed at the first time.'] = 'Na této stránce jsou vypsány odložené úlohy pracovníků. To jsou úlohy, které nemohly být napoprvé provedeny.';
$a->strings['Inspect Worker Queue'] = 'Prozkoumat frontu pro pracovníka';
$a->strings['This page lists the currently queued worker jobs. These jobs are handled by the worker cronjob you\'ve set up during install.'] = 'Na této stránce jsou vypsány aktuálně čekající úlohy pro pracovníka . Tyto úlohy vykonává úloha cron pracovníka, kterou jste nastavil/a při instalaci.';
$a->strings['ID'] = 'Identifikátor';
$a->strings['Job Parameters'] = 'Parametry úlohy';
$a->strings['Created'] = 'Vytvořeno';
$a->strings['Priority'] = 'Priorita';
$a->strings['Can not parse base url. Must have at least <scheme>://<domain>'] = 'Nelze zpracovat výchozí url adresu. Musí obsahovat alespoň <scheme>://<domain>';
$a->strings['Invalid storage backend setting value.'] = 'Neplatná hodnota nastavení backendu úložiště.';
$a->strings['Site settings updated.'] = 'Nastavení webu aktualizováno.';
$a->strings['No community page for local users'] = 'Žádná komunitní stránka pro místní uživatele';
$a->strings['No community page'] = 'Žádná komunitní stránka';
$a->strings['Public postings from users of this site'] = 'Veřejné příspěvky od místních uživatelů';
$a->strings['Public postings from the federated network'] = 'Veřejné příspěvky z federované sítě';
$a->strings['Public postings from local users and the federated network'] = 'Veřejné příspěvky od místních uživatelů a z federované sítě';
$a->strings['Disabled'] = 'Zakázáno';
$a->strings['Users, Global Contacts'] = 'Uživatelé, globální kontakty';
$a->strings['Users, Global Contacts/fallback'] = 'Uživatelé, globální kontakty/fallback';
$a->strings['One month'] = 'Jeden měsíc';
$a->strings['Three months'] = 'Tři měsíce';
$a->strings['Half a year'] = 'Půl roku';
$a->strings['One year'] = 'Jeden rok';
$a->strings['Multi user instance'] = 'Víceuživatelská instance';
$a->strings['Closed'] = 'Uzavřeno';
$a->strings['Requires approval'] = 'Vyžaduje schválení';
$a->strings['Open'] = 'Otevřeno';
$a->strings['No SSL policy, links will track page SSL state'] = 'Žádná SSL politika, odkazy budou následovat SSL stav stránky';
$a->strings['Force all links to use SSL'] = 'Vyžadovat u všech odkazů použití SSL';
$a->strings['Self-signed certificate, use SSL for local links only (discouraged)'] = 'Certifikát podepsaný sám sebou, použít SSL pouze pro místní odkazy (nedoporučeno)';
$a->strings['Don\'t check'] = 'Nekontrolovat';
$a->strings['check the stable version'] = 'kontrolovat stabilní verzi';
$a->strings['check the development version'] = 'kontrolovat vývojovou verzi';
$a->strings['Database (legacy)'] = 'Databáze (legacy)';
$a->strings['Site'] = 'Web';
$a->strings['Republish users to directory'] = 'Znovu publikovat uživatele do adresáře';
$a->strings['Registration'] = 'Registrace';
$a->strings['File upload'] = 'Nahrání souborů';
$a->strings['Policies'] = 'Politika';
$a->strings['Auto Discovered Contact Directory'] = 'Adresář automaticky objevených kontaktů';
$a->strings['Performance'] = 'Výkon';
$a->strings['Worker'] = 'Pracovník (worker)';
$a->strings['Message Relay'] = 'Přeposílání zpráv';
$a->strings['Relocate Instance'] = 'Přemístit instanci';
$a->strings['Warning! Advanced function. Could make this server unreachable.'] = 'Varování! Pokročilá funkce. Tímto můžete znepřístupnit server.';
$a->strings['Site name'] = 'Název webu';
$a->strings['Sender Email'] = 'E-mail odesílatele';
$a->strings['The email address your server shall use to send notification emails from.'] = 'E-mailová adresa, kterou bude Váš server používat pro posílání e-mailů s oznámeními.';
$a->strings['Banner/Logo'] = 'Banner/logo';
$a->strings['Shortcut icon'] = 'Favikona';
$a->strings['Link to an icon that will be used for browsers.'] = 'Odkaz k ikoně, která bude použita pro prohlížeče.';
$a->strings['Touch icon'] = 'Dotyková ikona';
$a->strings['Link to an icon that will be used for tablets and mobiles.'] = 'Odkaz k ikoně, která bude použita pro tablety a mobilní zařízení.';
$a->strings['Additional Info'] = 'Dodatečné informace';
$a->strings['For public servers: you can add additional information here that will be listed at %s/servers.'] = 'Pro veřejné servery: zde můžete přidat dodatečné informace, které budou vypsané na stránce %s/servers.';
$a->strings['System language'] = 'Systémový jazyk';
$a->strings['System theme'] = 'Systémový motiv';
$a->strings['Default system theme - may be over-ridden by user profiles - <a href="/admin/themes" id="cnftheme">Change default theme settings</a>'] = 'Výchozí systémový motiv - může být změněn v uživatelských profilech - <a href="/admin/themes" id="cnftheme">Změnit výchozí nastavení motivu</a>';
$a->strings['Mobile system theme'] = 'Mobilní systémový motiv';
$a->strings['Theme for mobile devices'] = 'Motiv pro mobilní zařízení';
$a->strings['SSL link policy'] = 'Politika SSL odkazů';
$a->strings['Determines whether generated links should be forced to use SSL'] = 'Určuje, zda-li budou generované odkazy používat SSL';
$a->strings['Force SSL'] = 'Vynutit SSL';
$a->strings['Force all Non-SSL requests to SSL - Attention: on some systems it could lead to endless loops.'] = 'Vynutit SSL pro všechny ne-SSL žádosti - Upozornění: na některých systémech může dojít k nekonečnému zacyklení.';
$a->strings['Hide help entry from navigation menu'] = 'Skrýt nápovědu z navigačního menu';
$a->strings['Hides the menu entry for the Help pages from the navigation menu. You can still access it calling /help directly.'] = 'Skryje z navigačního menu položku pro stránky nápovědy. Nápovědu můžete stále zobrazit přímo zadáním /help.';
$a->strings['Single user instance'] = 'Jednouživatelská instance';
$a->strings['Make this instance multi-user or single-user for the named user'] = 'Nastavit tuto instanci víceuživatelskou nebo jednouživatelskou pro pojmenovaného uživatele';
$a->strings['File storage backend'] = 'Backend souborového úložiště';
$a->strings['The backend used to store uploaded data. If you change the storage backend, you can manually move the existing files. If you do not do so, the files uploaded before the change will still be available at the old backend. Please see <a href="/help/Settings#1_2_3_1">the settings documentation</a> for more information about the choices and the moving procedure.'] = 'Backend použitý pro ukládání nahraných dat. Pokud změníte backend úložiště, můžete manuálně přesunout existující soubory. Pokud tak neučiníte, budou soubory nahrané před změnou stále dostupné ve starém backendu. Pro více informací o možnostech a proceduře pro přesun si prosím přečtěte <a href="/help/Settings#1_2_3_1">dokumentaci nastavení</a>.';
$a->strings['Maximum image size'] = 'Maximální velikost obrázků';
$a->strings['Maximum size in bytes of uploaded images. Default is 0, which means no limits.'] = 'Maximální velikost nahraných obrázků v bajtech. Výchozí hodnota je 0, což znamená bez omezení.';
$a->strings['Maximum image length'] = 'Maximální velikost obrázků';
$a->strings['Maximum length in pixels of the longest side of uploaded images. Default is -1, which means no limits.'] = 'Maximální délka delší stránky nahrávaných obrázků v pixelech. Výchozí hodnota je -1, což znamená bez omezení.';
$a->strings['JPEG image quality'] = 'Kvalita obrázků JPEG';
$a->strings['Uploaded JPEGS will be saved at this quality setting [0-100]. Default is 100, which is full quality.'] = 'Nahrávané obrázky JPEG budou uloženy se zadanou kvalitou v rozmezí [0-100]. Výchozí hodnota je 100, což znamená plnou kvalitu.';
$a->strings['Register policy'] = 'Politika registrace';
$a->strings['Maximum Daily Registrations'] = 'Maximální počet denních registrací';
$a->strings['If registration is permitted above, this sets the maximum number of new user registrations to accept per day.  If register is set to closed, this setting has no effect.'] = 'Pokud je registrace výše povolena, zde se nastaví maximální počet registrací nových uživatelů za den. Pokud je registrace zakázána, toto nastavení nemá žádný efekt.';
$a->strings['Register text'] = 'Text při registraci';
$a->strings['Will be displayed prominently on the registration page. You can use BBCode here.'] = 'Bude zobrazen viditelně na stránce registrace. Zde můžete používat BBCode.';
$a->strings['Forbidden Nicknames'] = 'Zakázané přezdívky';
$a->strings['Comma separated list of nicknames that are forbidden from registration. Preset is a list of role names according RFC 2142.'] = 'Seznam přezdívek, které nelze registrovat, oddělených čárkami. Přednastaven je seznam častých přezdívek dle RFC 2142.';
$a->strings['Accounts abandoned after x days'] = 'Účty jsou opuštěny po x dnech';
$a->strings['Will not waste system resources polling external sites for abandonded accounts. Enter 0 for no time limit.'] = 'Nebude se plýtvat systémovými zdroji kontaktováním externích webů s opuštěnými účty. Zadejte 0 pro žádný časový limit.';
$a->strings['Allowed friend domains'] = 'Povolené domény přátel';
$a->strings['Comma separated list of domains which are allowed to establish friendships with this site. Wildcards are accepted. Empty to allow any domains'] = 'Seznam domén, kterým je povoleno navazovat přátelství s tímto webem, oddělených čárkami. Zástupné znaky (wildcards) jsou povoleny. Prázné znamená libovolné domény.';
$a->strings['Allowed email domains'] = 'Povolené e-mailové domény';
$a->strings['Comma separated list of domains which are allowed in email addresses for registrations to this site. Wildcards are accepted. Empty to allow any domains'] = 'Seznam domén e-mailových adres, kterým je povoleno provádět registraci na tomto webu, oddělených čárkami. Zástupné znaky (wildcards) jsou povoleny. Prázné znamená libovolné domény.';
$a->strings['No OEmbed rich content'] = 'Žádný obohacený obsah oEmbed';
$a->strings['Don\'t show the rich content (e.g. embedded PDF), except from the domains listed below.'] = 'Neukazovat obohacený obsah (např. vložené PDF dokumenty), kromě toho z domén vypsaných níže.';
$a->strings['Allowed OEmbed domains'] = 'Povolené domény pro oEmbed';
$a->strings['Comma separated list of domains which oembed content is allowed to be displayed. Wildcards are accepted.'] = 'Seznam domén, u nichž je povoleno zobrazit obsah oEmbed, oddělených čárkami. Zástupné znaky jsou povoleny.';
$a->strings['Block public'] = 'Blokovat veřejný přístup';
$a->strings['Check to block public access to all otherwise public personal pages on this site unless you are currently logged in.'] = 'Označením zablokujete veřejný přístup ke všem jinak veřejně přístupným osobním stránkám nepřihlášeným uživatelům.';
$a->strings['Force publish'] = 'Vynutit publikaci';
$a->strings['Check to force all profiles on this site to be listed in the site directory.'] = 'Označením budou všechny profily na tomto serveru uvedeny v adresáři stránky.';
$a->strings['Enabling this may violate privacy laws like the GDPR'] = 'Povolení této funkce může porušit zákony o ochraně soukromí, jako je Obecné nařízení o ochraně osobních údajů (GDPR)';
$a->strings['Global directory URL'] = 'Adresa URL globálního adresáře';
$a->strings['URL to the global directory. If this is not set, the global directory is completely unavailable to the application.'] = 'Adresa URL globálního adresáře. Pokud toto není nastaveno, globální adresář bude aplikaci naprosto nedostupný.';
$a->strings['Private posts by default for new users'] = 'Nastavit pro nové uživatele příspěvky jako soukromé';
$a->strings['Set default post permissions for all new members to the default privacy group rather than public.'] = 'Nastavit výchozí práva pro příspěvky od všech nových členů na výchozí soukromou skupinu místo veřejné.';
$a->strings['Don\'t include post content in email notifications'] = 'Nezahrnovat v e-mailových oznámeních obsah příspěvků';
$a->strings['Don\'t include the content of a post/comment/private message/etc. in the email notifications that are sent out from this site, as a privacy measure.'] = ' V e-mailových oznámeních, které jsou odesílány z tohoto webu, nebudou z důvodů bezpečnosti obsaženy příspěvky/komentáře/soukromé zprávy apod. ';
$a->strings['Disallow public access to addons listed in the apps menu.'] = 'Zakázat veřejný přístup k rozšířením uvedeným v menu aplikace.';
$a->strings['Checking this box will restrict addons listed in the apps menu to members only.'] = 'Označení této volby omezí rozšíření uvedená v menu aplikace pouze pro členy.';
$a->strings['Don\'t embed private images in posts'] = 'Nepovolit přidávání soukromých obrázků do příspěvků';
$a->strings['Don\'t replace locally-hosted private photos in posts with an embedded copy of the image. This means that contacts who receive posts containing private photos will have to authenticate and load each image, which may take a while.'] = 'Nenahrazovat místní soukromé fotky v příspěvcích vloženou kopií obrázku. To znamená, že kontakty, které obdrží příspěvek obsahující soukromé fotky, budou muset autentikovat a načíst každý obrázek, což může zabrat nějaký čas.';
$a->strings['Explicit Content'] = 'Explicitní obsah';
$a->strings['Set this to announce that your node is used mostly for explicit content that might not be suited for minors. This information will be published in the node information and might be used, e.g. by the global directory, to filter your node from listings of nodes to join. Additionally a note about this will be shown at the user registration page.'] = 'Touto funkcí oznámíte, že je Váš server používán hlavně pro explicitní obsah, který nemusí být vhodný pro mladistvé. Tato informace bude publikována na stránce informací o serveru a může být využita např. globálním adresářem pro odfiltrování Vašeho serveru ze seznamu serverů pro spojení. Poznámka o tom bude navíc zobrazena na stránce registrace.';
$a->strings['Allow Users to set remote_self'] = 'Umožnit uživatelům nastavit remote_self';
$a->strings['With checking this, every user is allowed to mark every contact as a remote_self in the repair contact dialog. Setting this flag on a contact causes mirroring every posting of that contact in the users stream.'] = 'S tímto označením má každý uživatel možnost označit jakékoliv ze svých kontakt jako „remote_self“ v nastavení v dialogu opravit kontakt. Tímto označením se budou zrcadlit všechny správy tohoto kontaktu v uživatelově proudu.';
$a->strings['Block multiple registrations'] = 'Blokovat více registrací';
$a->strings['Disallow users to register additional accounts for use as pages.'] = 'Znemožnit uživatelům registraci dodatečných účtů k použití jako stránky.';
$a->strings['Disable OpenID'] = 'Zakázat OpenID';
$a->strings['Disable OpenID support for registration and logins.'] = 'Zakázat podporu OpenID pro registrace a přihlášení.';
$a->strings['No Fullname check'] = 'Bez kontroly celého jména';
$a->strings['Allow users to register without a space between the first name and the last name in their full name.'] = 'Dovolit uživatelům se registrovat bez mezery mezi křestním jménem a příjmením ve svém celém jméně.';
$a->strings['Community pages for visitors'] = 'Komunitní stránky pro návštěvníky';
$a->strings['Which community pages should be available for visitors. Local users always see both pages.'] = 'Které komunitní stránky by měly být viditelné pro návštěvníky. Místní uživatelé vždy vidí obě stránky.';
$a->strings['Posts per user on community page'] = 'Počet příspěvků na komunitní stránce';
$a->strings['The maximum number of posts per user on the community page. (Not valid for "Global Community")'] = 'Maximální počet příspěvků na uživatele na komunitní stránce. (neplatí pro „Globální komunitu“)';
$a->strings['Disable OStatus support'] = 'Zakázat podporu pro OStatus';
$a->strings['Disable built-in OStatus (StatusNet, GNU Social etc.) compatibility. All communications in OStatus are public, so privacy warnings will be occasionally displayed.'] = 'Zakázat zabudouvanou kompatibilitu s OStatus (StatusNet, GNU social apod.). Veškerá komunikace pomocí OStatus je veřejná, proto budou občas zobrazena varování o soukromí.';
$a->strings['OStatus support can only be enabled if threading is enabled.'] = 'Podpora pro OStatus může být zapnuta pouze, je-li povolen threading.';
$a->strings['Diaspora support can\'t be enabled because Friendica was installed into a sub directory.'] = 'Podpora pro Diasporu nemůže být zapnuta, protože Friendica byla nainstalována do podadresáře.';
$a->strings['Enable Diaspora support'] = 'Zapnout podporu pro Diaspora';
$a->strings['Provide built-in Diaspora network compatibility.'] = 'Poskytnout zabudovanou kompatibilitu sitě Diaspora.';
$a->strings['Only allow Friendica contacts'] = 'Povolit pouze kontakty z Friendica';
$a->strings['All contacts must use Friendica protocols. All other built-in communication protocols disabled.'] = 'Všechny kontakty musí používat protokol Friendica. Všchny ostatní zabudované komunikační protokoly budou zablokované.';
$a->strings['Verify SSL'] = 'Ověřit SSL';
$a->strings['If you wish, you can turn on strict certificate checking. This will mean you cannot connect (at all) to self-signed SSL sites.'] = 'Pokud si přejete, můžete vynutit striktní ověřování certifikátů. To znamená že se nebudete moci připojit k žádnému serveru s vlastním SSL certifikátem.';
$a->strings['Proxy user'] = 'Proxy uživatel';
$a->strings['Proxy URL'] = 'Proxy URL adresa';
$a->strings['Network timeout'] = 'Čas vypršení síťového spojení (timeout)';
$a->strings['Value is in seconds. Set to 0 for unlimited (not recommended).'] = 'Hodnota ve vteřinách. Nastavte 0 pro neomezeno (není doporučeno).';
$a->strings['Maximum Load Average'] = 'Maximální průměrné zatížení';
$a->strings['Maximum system load before delivery and poll processes are deferred - default %d.'] = 'Maximální systémová zátěž, než budou procesy pro doručení a dotazování odloženy - výchozí hodnota %d.';
$a->strings['Maximum Load Average (Frontend)'] = 'Maximální průměrné zatížení (Frontend)';
$a->strings['Maximum system load before the frontend quits service - default 50.'] = 'Maximální zatížení systému předtím, než frontend ukončí službu - výchozí hodnota 50';
$a->strings['Minimal Memory'] = 'Minimální paměť';
$a->strings['Minimal free memory in MB for the worker. Needs access to /proc/meminfo - default 0 (deactivated).'] = 'Minimální volná paměť v MB pro pracovníka. Potřebuje přístup do /proc/meminfo - výchozí hodnota 0 (deaktivováno)';
$a->strings['Maximum table size for optimization'] = 'Maximální velikost tabulky pro optimalizaci';
$a->strings['Maximum table size (in MB) for the automatic optimization. Enter -1 to disable it.'] = 'Maximální velikost tabulky (v MB) pro automatickou optimalizaci. Zadáním -1 ji vypnete.';
$a->strings['Minimum level of fragmentation'] = 'Minimální úroveň fragmentace';
$a->strings['Minimum fragmenation level to start the automatic optimization - default value is 30%.'] = 'Minimální úroveň fragmentace pro spuštění automatické optimalizace - výchozí hodnota je 30%.';
$a->strings['Periodical check of global contacts'] = 'Pravidelně ověřování globálních kontaktů';
$a->strings['If enabled, the global contacts are checked periodically for missing or outdated data and the vitality of the contacts and servers.'] = 'Pokud je toto povoleno, budou globální kontakty pravidelně kontrolovány pro zastaralá data a životnost kontaktů a serverů.';
$a->strings['Days between requery'] = 'Dny mezi dotazy';
$a->strings['Number of days after which a server is requeried for his contacts.'] = 'Počet dnů, po kterých je server znovu dotázán na své kontakty';
$a->strings['Discover contacts from other servers'] = 'Objevit kontakty z ostatních serverů';
$a->strings['Periodically query other servers for contacts. You can choose between "Users": the users on the remote system, "Global Contacts": active contacts that are known on the system. The fallback is meant for Redmatrix servers and older friendica servers, where global contacts weren\'t available. The fallback increases the server load, so the recommended setting is "Users, Global Contacts".'] = 'Periodicky dotazovat ostatní servery pro kontakty. Můžete si vybrat mezi možnostmi: „Uživatelé“: uživatelé na vzdáleném systému, a „Globální kontakty“: aktivní kontakty, které jsou známy na systému. Funkce fallback je určena pro servery Redmatrix a starší servery Friendica, kde globální kontakty nejsou dostupné. Fallback zvyšuje serverovou zátěž, doporučené nastavení je proto „Uživatelé, globální kontakty“. ';
$a->strings['Timeframe for fetching global contacts'] = 'Časový rámec pro načítání globálních kontaktů';
$a->strings['When the discovery is activated, this value defines the timeframe for the activity of the global contacts that are fetched from other servers.'] = 'Pokud je aktivováno objevování, tato hodnota definuje časový rámec pro aktivitu globálních kontaktů, které jsou načteny z jiných serverů.';
$a->strings['Search the local directory'] = 'Hledat  v místním adresáři';
$a->strings['Search the local directory instead of the global directory. When searching locally, every search will be executed on the global directory in the background. This improves the search results when the search is repeated.'] = 'Prohledat místní adresář místo globálního adresáře. Při místním prohledávání bude každé hledání provedeno v globálním adresáři na pozadí. To vylepšuje výsledky při zopakování hledání.';
$a->strings['Publish server information'] = 'Zveřejnit informace o serveru';
$a->strings['If enabled, general server and usage data will be published. The data contains the name and version of the server, number of users with public profiles, number of posts and the activated protocols and connectors. See <a href="http://the-federation.info/">the-federation.info</a> for details.'] = 'Pokud je tohle povoleno, budou zveřejněna obecná data o serveru a jeho používání. Data obsahují jméno a verzi serveru, počet uživatelů s veřejnými profily, počet příspěvků a aktivované protokoly a konektory. Pro více informací navštivte <a href="http://the-federation.info/">the-federation.info</a>.';
$a->strings['Check upstream version'] = 'Zkontrolovat upstreamovou verzi';
$a->strings['Enables checking for new Friendica versions at github. If there is a new version, you will be informed in the admin panel overview.'] = 'Umožní kontrolovat nové verze Friendica na GitHubu. Pokud existuje nová verze, budete informován/a na přehledu administračního panelu.';
$a->strings['Suppress Tags'] = 'Potlačit štítky';
$a->strings['Suppress showing a list of hashtags at the end of the posting.'] = 'Potlačit zobrazení seznamu hastagů na konci příspěvků.';
$a->strings['Clean database'] = 'Vyčistit databázi';
$a->strings['Remove old remote items, orphaned database records and old content from some other helper tables.'] = 'Odstranit staré vzdálené položky, osiřelé záznamy v databázi a starý obsah z některých dalších pomocných tabulek.';
$a->strings['Lifespan of remote items'] = 'Životnost vzdálených položek';
$a->strings['When the database cleanup is enabled, this defines the days after which remote items will be deleted. Own items, and marked or filed items are always kept. 0 disables this behaviour.'] = 'Pokud je zapnuto čištění databáze, tato funkce definuje počet dnů, po kterých budou smazány vzdálené položky. Vlastní položky a označené či vyplněné položky jsou vždy ponechány. Hodnota 0 tuto funkci vypíná.';
$a->strings['Lifespan of unclaimed items'] = 'Životnost nevyžádaných položek';
$a->strings['When the database cleanup is enabled, this defines the days after which unclaimed remote items (mostly content from the relay) will be deleted. Default value is 90 days. Defaults to the general lifespan value of remote items if set to 0.'] = 'Pokud je zapnuto čištění databáze, tato funkce definuje počet dnů, po kterých budou smazány nevyžádané vzdálené položky (většinou obsah z přeposílacího serveru). Výchozí hodnota je 90 dní. Pokud je zadaná hodnota 0, výchozí hodnotou bude obecná hodnota životnosti vzdálených položek.';
$a->strings['Lifespan of raw conversation data'] = 'Životnost hrubých dat konverzací';
$a->strings['The conversation data is used for ActivityPub and OStatus, as well as for debug purposes. It should be safe to remove it after 14 days, default is 90 days.'] = 'Data konverzací jsou použita pro ActivityPub a OStatus a pro účely ladění. Mělo by být bezpečné je odstranit po 14 dnech, výchozí hodnota je 90 dní.';
$a->strings['Path to item cache'] = 'Cesta k položkám v mezipaměti';
$a->strings['The item caches buffers generated bbcode and external images.'] = 'V mezipaměti je uložen vygenerovaný BBCode a externí obrázky.';
$a->strings['Cache duration in seconds'] = 'Doba platnosti vyrovnávací paměti v sekundách';
$a->strings['How long should the cache files be hold? Default value is 86400 seconds (One day). To disable the item cache, set the value to -1.'] = 'Jak dlouho by měla vyrovnávací paměť držet data? Výchozí hodnota je 86400 sekund (Jeden den). Pro vypnutí funkce vyrovnávací paměti nastavte hodnotu na -1.';
$a->strings['Maximum numbers of comments per post'] = 'Maximální počet komentářů k příspěvku';
$a->strings['How much comments should be shown for each post? Default value is 100.'] = 'Kolik komentářů by mělo být zobrazeno k každému příspěvku? Výchozí hodnotou je 100.';
$a->strings['Temp path'] = 'Cesta k dočasným souborům';
$a->strings['If you have a restricted system where the webserver can\'t access the system temp path, enter another path here.'] = 'Pokud máte omezený systém, kde webový server nemá přístup k systémové složce temp, zde zadejte jinou cestu.';
$a->strings['Disable picture proxy'] = 'Vypnutí obrázkové proxy';
$a->strings['The picture proxy increases performance and privacy. It shouldn\'t be used on systems with very low bandwidth.'] = 'Obrázková proxy zvyšuje výkon a soukromí. Neměla by však být používána na systémech s velmi malou rychlostí připojení.';
$a->strings['Only search in tags'] = 'Hledat pouze ve štítcích';
$a->strings['On large systems the text search can slow down the system extremely.'] = 'Textové vyhledávání může u rozsáhlých systémů znamenat velmi citelné zpomalení systému.';
$a->strings['New base url'] = 'Nová výchozí url adresa';
$a->strings['Change base url for this server. Sends relocate message to all Friendica and Diaspora* contacts of all users.'] = 'Změnit výchozí URL adresu pro tento server. Toto odešle zprávu o přemístění všem kontaktům na Friendica a Diaspora* všech uživatelů.';
$a->strings['RINO Encryption'] = 'RINO Šifrování';
$a->strings['Encryption layer between nodes.'] = 'Šifrovací vrstva mezi servery.';
$a->strings['Enabled'] = 'Povoleno';
$a->strings['Maximum number of parallel workers'] = 'Maximální počet paralelních pracovníků';
$a->strings['On shared hosters set this to %d. On larger systems, values of %d are great. Default value is %d.'] = 'Na sdílených hostinzích toto nastavte na hodnotu %d. Na větších systémech se hodí hodnoty kolem %d. Výchozí hodnotou je %d.';
$a->strings['Don\'t use "proc_open" with the worker'] = 'Nepoužívat „proc_open“ s pracovníkem';
$a->strings['Enable this if your system doesn\'t allow the use of "proc_open". This can happen on shared hosters. If this is enabled you should increase the frequency of worker calls in your crontab.'] = 'Tohle zapněte, pokud Váš systém nedovoluje používání „proc_open“. To se může stát na sdíleném hostingu. Pokud je toto povoleno, bude zvýšena častost vyvolávání pracovníka v crontabu.';
$a->strings['Enable fastlane'] = 'Povolit fastlane';
$a->strings['When enabed, the fastlane mechanism starts an additional worker if processes with higher priority are blocked by processes of lower priority.'] = 'Pokud je toto povoleno, mechanismus fastlane spustí dodatečného pracovníka, pokud jsou procesy vyšší priority zablokované procesy nižší priority.';
$a->strings['Enable frontend worker'] = 'Povolit frontendového pracovníka';
$a->strings['When enabled the Worker process is triggered when backend access is performed (e.g. messages being delivered). On smaller sites you might want to call %s/worker on a regular basis via an external cron job. You should only enable this option if you cannot utilize cron/scheduled jobs on your server.'] = 'Pokud je toto povoleno, bude proces pracovníka vyvolán, pokud je proveden backendový přístup (např. když jsou doručovány zprávy). Na menších stránkách možná budete chtít pravidelně vyvolávat %s/worker přes externí úlohu cron. Tuto možnost byste měl/a zapnout pouze, pokud nemůžete na vašem serveru používat cron/plánované úlohy.';
$a->strings['Subscribe to relay'] = 'Odebírat ze serveru pro přeposílání';
$a->strings['Enables the receiving of public posts from the relay. They will be included in the search, subscribed tags and on the global community page.'] = 'Umožňuje přijímat veřejné příspěvky z přeposílacího serveru. Budou zahrnuty ve vyhledávání, odebíraných štítcích a na globální komunitní stránce.';
$a->strings['Relay server'] = 'Server pro přeposílání (relay)';
$a->strings['Address of the relay server where public posts should be send to. For example https://relay.diasp.org'] = 'Adresa přeposílacího serveru, kam budou posílány veřejné příspěvky. Příklad: https://relay.diasp.org';
$a->strings['Direct relay transfer'] = 'Přímý přenos na server pro přeposílání';
$a->strings['Enables the direct transfer to other servers without using the relay servers'] = 'Umožňuje přímý přenos na ostatní servery bez použití přeposílacích serverů';
$a->strings['Relay scope'] = 'Rozsah příspěvků z přeposílacího serveru';
$a->strings['Can be "all" or "tags". "all" means that every public post should be received. "tags" means that only posts with selected tags should be received.'] = 'Může být buď „vše“ nebo „štítky“. „vše“ znamená, že budou přijaty všechny veřejné příspěvky. „štítky“ znamená, že budou přijaty pouze příspěvky s vybranými štítky.';
$a->strings['all'] = 'vše';
$a->strings['tags'] = 'štítky';
$a->strings['Server tags'] = 'Serverové štítky';
$a->strings['Comma separated list of tags for the "tags" subscription.'] = 'Seznam štítků pro odběr „tags“, oddělených čárkami.';
$a->strings['Allow user tags'] = 'Povolit uživatelské štítky';
$a->strings['If enabled, the tags from the saved searches will used for the "tags" subscription in addition to the "relay_server_tags".'] = 'Pokud je toto povoleno, budou štítky z uložených hledání vedle odběru „relay_server_tags“ použity i pro odběr „tags“.';
$a->strings['Start Relocation'] = 'Začít přemístění';
$a->strings['Your DB still runs with MyISAM tables. You should change the engine type to InnoDB. As Friendica will use InnoDB only features in the future, you should change this! See <a href="%s">here</a> for a guide that may be helpful converting the table engines. You may also use the command <tt>php bin/console.php dbstructure toinnodb</tt> of your Friendica installation for an automatic conversion.<br />'] = 'Vaše databáze stále běží s tabulkami MyISAM. Měl/a byste změnit typ datového úložiště na InnoDB. Protože Friendica bude v budoucnu používat pouze funkce pro InnoDB, měl/a byste to změnit! <a href="%s">Zde</a> naleznete návod, který by pro vás mohl být užitečný při konverzi úložišť. Můžete také použít příkaz <tt>php bin/console.php dbstructure toinnodb</tt> na Vaší instalaci Friendica pro automatickou konverzi.<br />';
$a->strings['There is a new version of Friendica available for download. Your current version is %1$s, upstream version is %2$s'] = 'Je dostupná ke stažení nová verze Friendica. Vaše aktuální verze je %1$s, upstreamová verze je %2$s';
$a->strings['The database update failed. Please run "php bin/console.php dbstructure update" from the command line and have a look at the errors that might appear.'] = 'Aktualizace databáze selhala. Prosím, spusťte příkaz „php bin/console.php dbstructure update“ z příkazového řádku a podívejte se na chyby, které by se mohly vyskytnout.';
$a->strings['The last update failed. Please run "php bin/console.php dbstructure update" from the command line and have a look at the errors that might appear. (Some of the errors are possibly inside the logfile.)'] = 'Polslední aktualizace selhala. Prosím spusťte příkaz „php bin/console.php dbstructure update“ z příkazového řádku a podívejte se na chyby, které se mohou stát. (Některé chyby mohou být v záznamvém souboru)';
$a->strings['The worker was never executed. Please check your database structure!'] = 'Pracovník nebyl nikdy spuštěn. Prosím zkontrolujte strukturu Vaší databáze!';
$a->strings['The last worker execution was on %s UTC. This is older than one hour. Please check your crontab settings.'] = 'Pracovník byl naposledy spuštěn v %s UTC. Toto je více než jedna hodina. Prosím zkontrolujte si nastavení crontab.';
$a->strings['Friendica\'s configuration now is stored in config/local.config.php, please copy config/local-sample.config.php and move your config from <code>.htconfig.php</code>. See <a href="%s">the Config help page</a> for help with the transition.'] = 'Konfigurace Friendica je nyní uložena v souboru config/local.config.php, prosím zkopírujte soubor config/local-sample.config.php a přesuňte svou konfiguraci ze souboru <code>.htconfig.php</code>. Pro pomoc při přechodu navštivte <a href="%s">stránku Config v sekci nápovědy</a>.';
$a->strings['Friendica\'s configuration now is stored in config/local.config.php, please copy config/local-sample.config.php and move your config from <code>config/local.ini.php</code>. See <a href="%s">the Config help page</a> for help with the transition.'] = 'Konfigurace Friendica je nyní uložena v souboru config/local.config.php, prosím zkopírujte soubor config/local-sample.config.php a přesuňte svou konfiguraci ze souboru <code>local.config.php</code>. Pro pomoc při přechodu navštivte <a href="%s">stránku Config v sekci nápovědy</a>.';
$a->strings['<a href="%s">%s</a> is not reachable on your system. This is a severe configuration issue that prevents server to server communication. See <a href="%s">the installation page</a> for help.'] = '<a href="%s">%s</a> není na Vašem systému dosažitelné. Tohle je závažná chyba konfigurace, která brání komunikaci mezi servery. Pro pomoc navštivte <a href="%s">stránku instalace</a>.';
$a->strings['Friendica\'s system.basepath was updated from \'%s\' to \'%s\'. Please remove the system.basepath from your db to avoid differences.'] = 'system.basepath Friendica bylo aktualizováno z „%s“ na „%s“. Pro vyhnutí se rozdílům prosím odstraňte z vaší databáze system.basepath.';
$a->strings['Friendica\'s current system.basepath \'%s\' is wrong and the config file \'%s\' isn\'t used.'] = 'Aktuální system.basepath Friendica „%s“ je špatné a konfigurační soubor „%s“ se nepoužívá.';
$a->strings['Friendica\'s current system.basepath \'%s\' is not equal to the config file \'%s\'. Please fix your configuration.'] = 'Aktuální system.basepath „%s“ není rovno konfguračnímu souboru „%s“. Prosím opravte si svou konfiguraci.';
$a->strings['Normal Account'] = 'Normální účet';
$a->strings['Automatic Follower Account'] = 'Účet s automatickými sledujícími';
$a->strings['Public Forum Account'] = 'Účet veřejného fóra';
$a->strings['Automatic Friend Account'] = 'Účet s automatickými přáteli';
$a->strings['Blog Account'] = 'Blogovací účet';
$a->strings['Private Forum Account'] = 'Účet soukromého fóra';
$a->strings['Message queues'] = 'Fronty zpráv';
$a->strings['Server Settings'] = 'Nastavení serveru';
$a->strings['Summary'] = 'Shrnutí';
$a->strings['Registered users'] = 'Registrovaní uživatelé';
$a->strings['Pending registrations'] = 'Čekající registrace';
$a->strings['Version'] = 'Verze';
$a->strings['Active addons'] = 'Aktivní doplňky';
$a->strings['No friends to display.'] = 'Žádní přátelé k zobrazení';
$a->strings['Item was not found.'] = 'Položka nebyla nalezena.';
$a->strings['Submanaged account can\'t access the administation pages. Please log back in as the master account.'] = 'Účet spravovaný jiným nemá přístup k administračním stránkám. Prosím přihlaste se znovu jako nejvyšší účet.';
$a->strings['Overview'] = 'Přehled';
$a->strings['Configuration'] = 'Konfigurace';
$a->strings['Database'] = 'Databáze';
$a->strings['DB updates'] = 'Aktualizace databáze';
$a->strings['Inspect Deferred Workers'] = 'Prozkoumat odložené pracovníky';
$a->strings['Inspect worker Queue'] = 'Prozkoumat frontu pro pracovníka';
$a->strings['Tools'] = 'Nástroje';
$a->strings['Contact Blocklist'] = 'Blokované kontakty';
$a->strings['Server Blocklist'] = 'Blokované servery';
$a->strings['Diagnostics'] = 'Diagnostika';
$a->strings['PHP Info'] = 'Info o PHP';
$a->strings['probe address'] = 'vyzkoušet adresu';
$a->strings['check webfinger'] = 'vyzkoušet webfinger';
$a->strings['Item Source'] = 'Zdroj položky';
$a->strings['Babel'] = 'Babel';
$a->strings['Addon Features'] = 'Vlastnosti doplňků';
$a->strings['User registrations waiting for confirmation'] = 'Registrace uživatelů čekající na potvrzení';
$a->strings['People Search - %s'] = 'Vyhledávání lidí - %s';
$a->strings['Forum Search - %s'] = 'Vyhledávání fór - %s';
$a->strings['You must be logged in to use this module'] = 'Pro používání tohoto modulu musíte být přihlášen/a';
$a->strings['Source URL'] = 'Zdrojová adresa URL';
$a->strings['Time Conversion'] = 'Časový převod';
$a->strings['Friendica provides this service for sharing events with other networks and friends in unknown timezones.'] = 'Friendica poskytuje tuto službu ke sdílení událostí s ostatními sítěmi a přáteli v neznámých časových pásmech';
$a->strings['UTC time: %s'] = 'UTC čas: %s';
$a->strings['Current timezone: %s'] = 'Aktuální časové pásmo: %s';
$a->strings['Converted localtime: %s'] = 'Převedený místní čas : %s';
$a->strings['Please select your timezone:'] = 'Prosím, vyberte své časové pásmo:';
$a->strings['Only logged in users are permitted to perform a probing.'] = 'Pouze přihlášení uživatelé mohou zkoušet adresy.';
$a->strings['Lookup address'] = 'Najít adresu';
$a->strings['Source input'] = 'Zdrojový vstup';
$a->strings['BBCode::toPlaintext'] = 'BBCode::toPlaintext';
$a->strings['BBCode::convert (raw HTML)'] = 'BBCode::convert (hrubé HTML)';
$a->strings['BBCode::convert'] = 'BBCode::convert';
$a->strings['BBCode::convert => HTML::toBBCode'] = 'BBCode::convert => HTML::toBBCode';
$a->strings['BBCode::toMarkdown'] = 'BBCode::toMarkdown';
$a->strings['BBCode::toMarkdown => Markdown::convert'] = 'BBCode::toMarkdown => Markdown::convert';
$a->strings['BBCode::toMarkdown => Markdown::toBBCode'] = 'BBCode::toMarkdown => Markdown::toBBCode';
$a->strings['BBCode::toMarkdown =>  Markdown::convert => HTML::toBBCode'] = 'BBCode::toMarkdown =>  Markdown::convert => HTML::toBBCode';
$a->strings['Item Body'] = 'Tělo položky';
$a->strings['Item Tags'] = 'Štítky položky';
$a->strings['Source input (Diaspora format)'] = 'Zdrojový vstup (formát Diaspora)';
$a->strings['Markdown::convert (raw HTML)'] = 'Markdown::convert (hrubé HTML)';
$a->strings['Markdown::convert'] = 'Markdown::convert';
$a->strings['Markdown::toBBCode'] = 'Markdown::toBBCode';
$a->strings['Raw HTML input'] = 'Hrubý HTML vstup';
$a->strings['HTML Input'] = 'HTML vstup';
$a->strings['HTML::toBBCode'] = 'HTML::toBBCode';
$a->strings['HTML::toBBCode => BBCode::convert'] = 'HTML::toBBCode => BBCode::convert';
$a->strings['HTML::toBBCode => BBCode::convert (raw HTML)'] = 'HTML::toBBCode => BBCode::convert (hrubé HTML)';
$a->strings['HTML::toBBCode => BBCode::toPlaintext'] = 'HTML::toBBCode => BBCode::toPlaintext';
$a->strings['HTML::toMarkdown'] = 'HTML::toMarkdown';
$a->strings['HTML::toPlaintext'] = 'HTML::toPlaintext';
$a->strings['HTML::toPlaintext (compact)'] = 'HTML::toPlaintext (kompaktní)';
$a->strings['Source text'] = 'Zdrojový text';
$a->strings['BBCode'] = 'BBCode';
$a->strings['Markdown'] = 'Markdown';
$a->strings['HTML'] = 'HTML';
$a->strings['No entries (some entries may be hidden).'] = 'Žádné záznamy (některé položky mohou být skryty).';
$a->strings['Find on this site'] = 'Najít na tomto webu';
$a->strings['Results for:'] = 'Výsledky pro:';
$a->strings['Site Directory'] = 'Adresář serveru';
$a->strings['Filetag %s saved to item'] = 'Filetag %s uložen k předmětu';
$a->strings['- select -'] = '- vyberte -';
$a->strings['No given contact.'] = 'Žádný daný kontakt.';
$a->strings['Installed addons/apps:'] = 'Nainstalované doplňky/aplikace:';
$a->strings['No installed addons/apps'] = 'Žádne nainstalované doplňky/aplikace';
$a->strings['Read about the <a href="%1$s/tos">Terms of Service</a> of this node.'] = 'Přečtěte si o <a href="%1$s/tos">Podmínkách používání</a> tohoto serveru.';
$a->strings['On this server the following remote servers are blocked.'] = 'Na tomto serveru jsou zablokovány následující vzdálené servery.';
$a->strings['This is Friendica, version %s that is running at the web location %s. The database version is %s, the post update version is %s.'] = 'Tohle je Friendica, verze %s, běžící na webové adrese %s. Verze databáze je %s, verze post update je %s.';
$a->strings['Please visit <a href="https://friendi.ca">Friendi.ca</a> to learn more about the Friendica project.'] = 'Pro více informací o projektu Friendica, prosím, navštivte stránku <a href="https://friendi.ca">Friendi.ca</a>';
$a->strings['Bug reports and issues: please visit'] = 'Pro hlášení chyb a námětů na změny prosím navštivte';
$a->strings['the bugtracker at github'] = 'sledování chyb na GitHubu';
$a->strings['Suggestions, praise, etc. - please email "info" at "friendi - dot - ca'] = 'Návrhy, pochvaly atd. prosím posílejte na adresu „info“ zavináč „friendi“-tečka-„ca“';
$a->strings['Group created.'] = 'Skupina vytvořena.';
$a->strings['Could not create group.'] = 'Nelze vytvořit skupinu.';
$a->strings['Group not found.'] = 'Skupina nenalezena.';
$a->strings['Group name changed.'] = 'Název skupiny byl změněn.';
$a->strings['Unknown group.'] = 'Neznámá skupina.';
$a->strings['Contact is unavailable.'] = 'Kontakt je nedostupný.';
$a->strings['Contact is deleted.'] = 'Knotakt je smazán.';
$a->strings['Contact is blocked, unable to add it to a group.'] = 'Kontakt je blokován, nelze jej přidat ke skupině.';
$a->strings['Unable to add the contact to the group.'] = 'Nelze přidat kontakt ke skupině.';
$a->strings['Contact successfully added to group.'] = 'Kontakt úspěšně přidán ke skupině.';
$a->strings['Unable to remove the contact from the group.'] = 'Nelze odstranit kontakt ze skupiny.';
$a->strings['Contact successfully removed from group.'] = 'Kontakt úspěšně odstraněn ze skupiny.';
$a->strings['Unknown group command.'] = 'Neznámý skupinový příkaz.';
$a->strings['Bad request.'] = 'Špatný požadavek.';
$a->strings['Save Group'] = 'Uložit skupinu';
$a->strings['Filter'] = 'Filtr';
$a->strings['Create a group of contacts/friends.'] = 'Vytvořit skupinu kontaktů/přátel.';
$a->strings['Group removed.'] = 'Skupina odstraněna. ';
$a->strings['Unable to remove group.'] = 'Nelze odstranit skupinu.';
$a->strings['Delete Group'] = 'Odstranit skupinu';
$a->strings['Edit Group Name'] = 'Upravit název skupiny';
$a->strings['Members'] = 'Členové';
$a->strings['Remove contact from group'] = 'Odebrat kontakt ze skupiny';
$a->strings['Add contact to group'] = 'Přidat kontakt ke skupině';
$a->strings['Help:'] = 'Nápověda:';
$a->strings['Welcome to %s'] = 'Vítejte na %s';
$a->strings['Total invitation limit exceeded.'] = 'Celkový limit pozvánek byl překročen';
$a->strings['%s : Not a valid email address.'] = '%s : není platná e-mailová adresa.';
$a->strings['Please join us on Friendica'] = 'Prosím přidejte se k nám na Friendica';
$a->strings['Invitation limit exceeded. Please contact your site administrator.'] = 'Limit pozvánek byl překročen. Prosím kontaktujte administrátora vaší stránky.';
$a->strings['%s : Message delivery failed.'] = '%s : Doručení zprávy se nezdařilo.';
$a->strings['%d message sent.'] = [
	0 => '%d zpráva odeslána.',
	1 => '%d zprávy odeslány.',
	2 => '%d zprávy odesláno.',
	3 => '%d zpráv odesláno.',
];
$a->strings['You have no more invitations available'] = 'Nemáte k dispozici žádné další pozvánky';
$a->strings['Visit %s for a list of public sites that you can join. Friendica members on other sites can all connect with each other, as well as with members of many other social networks.'] = 'Navštiv %s pro seznam veřejných serverů, na kterých se můžeš přidat. Členové Friendica na jiných serverech se mohou spojit mezi sebou, jakožto i se členy mnoha dalších sociálních sítí.';
$a->strings['To accept this invitation, please visit and register at %s or any other public Friendica website.'] = 'K přijetí této pozvánky prosím navštivte a registrujte se na %s nebo na kterémkoliv jiném veřejném serveru Friendica.';
$a->strings['Friendica sites all inter-connect to create a huge privacy-enhanced social web that is owned and controlled by its members. They can also connect with many traditional social networks. See %s for a list of alternate Friendica sites you can join.'] = 'Stránky Friendica jsou navzájem propojené a vytváří tak obrovský sociální web s dúrazem na soukromí, kterou vlastní a kontrojují její členové, Mohou se také připojit k mnoha tradičním socilním sítím. Navštivte %s pro seznam alternativních serverů Friendica, ke kterým se můžete přidat.';
$a->strings['Our apologies. This system is not currently configured to connect with other public sites or invite members.'] = 'Omlouváme se. Systém nyní není nastaven tak, aby se připojil k ostatním veřejným serverům nebo umožnil pozvat nové členy.';
$a->strings['Friendica sites all inter-connect to create a huge privacy-enhanced social web that is owned and controlled by its members. They can also connect with many traditional social networks.'] = 'Stránky Friendica jsou navzájem propojené a vytváří tak obrovský sociální web s dúrazem na soukromí, kterou vlastní a kontrolují její členové. Mohou se také připojit k mnoha tradičním sociálním sítím.';
$a->strings['To accept this invitation, please visit and register at %s.'] = 'Pokud chcete tuto pozvánku přijmout, prosím navštivte %s a registrujte se tam.';
$a->strings['Send invitations'] = 'Poslat pozvánky';
$a->strings['Enter email addresses, one per line:'] = 'Zadejte e-mailové adresy, jednu na řádek:';
$a->strings['You are cordially invited to join me and other close friends on Friendica - and help us to create a better social web.'] = 'Jsi srdečně pozván/a se připojit ke mně a k mým blízkým přátelům na Friendica - a pomoci nám vytvořit lepší sociální web.';
$a->strings['You will need to supply this invitation code: $invite_code'] = 'Budeš muset zadat tento pozvánkový kód: $invite_code';
$a->strings['Once you have registered, please connect with me via my profile page at:'] = 'Jakmile se zaregistruješ, prosím spoj se se mnou přes mou profilovu stránku na:';
$a->strings['For more information about the Friendica project and why we feel it is important, please visit http://friendi.ca'] = 'Pro více informací o projektu Friendica a proč si myslím, že je důležitý, prosím navštiv http://friendi.ca';
$a->strings['Compose new personal note'] = 'Napsat novou osobní poznámku';
$a->strings['Compose new post'] = 'Napsat nový příspěvek';
$a->strings['Create a New Account'] = 'Vytvořit nový účet';
$a->strings['Password: '] = 'Heslo: ';
$a->strings['Remember me'] = 'Pamatovat si mě';
$a->strings['Or login using OpenID: '] = 'Nebo se přihlaste pomocí OpenID: ';
$a->strings['Forgot your password?'] = 'Zapomněl/a jste heslo?';
$a->strings['Website Terms of Service'] = 'Podmínky používání stránky';
$a->strings['terms of service'] = 'podmínky používání';
$a->strings['Website Privacy Policy'] = 'Zásady soukromí serveru';
$a->strings['privacy policy'] = 'zásady soukromí';
$a->strings['Logged out.'] = 'Odhlášen.';
$a->strings['System down for maintenance'] = 'Systém vypnut z důvodů údržby';
$a->strings['Page not found.'] = 'Stránka nenalezena';
$a->strings['Invalid photo with id %s.'] = 'Neplatná fotka s ID %s.';
$a->strings['User not found.'] = 'Uživatel nenalezen.';
$a->strings['No contacts.'] = 'Žádné kontakty.';
$a->strings['Visit %s\'s profile [%s]'] = 'Navštivte profil uživatele %s [%s]';
$a->strings['Follower (%s)'] = [
	0 => 'Sledující (%s)',
	1 => 'Sledující (%s)',
	2 => 'Sledující (%s)',
	3 => 'Sledující (%s)',
];
$a->strings['Following (%s)'] = [
	0 => 'Sledovaný (%s)',
	1 => 'Sledovaní (%s)',
	2 => 'Sledovaní (%s)',
	3 => 'Sledovaní (%s)',
];
$a->strings['Mutual friend (%s)'] = [
	0 => 'Vzájemný přítel (%s)',
	1 => 'Vzájemní přátelé (%s)',
	2 => 'Vzájemní přátelé (%s)',
	3 => 'Vzájemní přátelé (%s)',
];
$a->strings['Contact (%s)'] = [
	0 => 'Kontakt (%s)',
	1 => 'Kontakty (%s)',
	2 => 'Kontakty (%s)',
	3 => 'Kontakty (%s)',
];
$a->strings['All contacts'] = 'Všechny kontakty';
$a->strings['You may (optionally) fill in this form via OpenID by supplying your OpenID and clicking "Register".'] = 'Tento formulář můžete (volitelně) vyplnit s pomocí OpenID tím, že vyplníte své OpenID a kliknete na tlačítko „Zaregistrovat“.';
$a->strings['If you are not familiar with OpenID, please leave that field blank and fill in the rest of the items.'] = 'Pokud nepoužíváte OpenID, nechte prosím toto pole prázdné a vyplňte zbylé položky.';
$a->strings['Your OpenID (optional): '] = 'Vaše OpenID (nepovinné): ';
$a->strings['Include your profile in member directory?'] = 'Chcete zahrnout váš profil v adresáři členů?';
$a->strings['Note for the admin'] = 'Poznámka pro administrátora';
$a->strings['Leave a message for the admin, why you want to join this node'] = 'Zanechejte administrátorovi zprávu, proč se k tomuto serveru chcete připojit';
$a->strings['Membership on this site is by invitation only.'] = 'Členství na tomto webu je pouze na pozvání.';
$a->strings['Your invitation code: '] = 'Váš kód pozvánky: ';
$a->strings['Your Full Name (e.g. Joe Smith, real or real-looking): '] = 'Celé jméno (např. Jan Novák, skutečné či skutečně vypadající):';
$a->strings['Your Email Address: (Initial information will be send there, so this has to be an existing address.)'] = 'Vaše e-mailová adresa: (Budou sem poslány počáteční informace, musí to proto být existující adresa.)';
$a->strings['Leave empty for an auto generated password.'] = 'Ponechte prázdné pro automatické vygenerovaní hesla.';
$a->strings['Choose a profile nickname. This must begin with a text character. Your profile address on this site will then be "<strong>nickname@%s</strong>".'] = 'Vyberte si přezdívku pro váš profil. Musí začínat textovým znakem. Vaše profilová adresa na této stránce bude mít tvar „<strong>přezdívka@%s</strong>“.';
$a->strings['Choose a nickname: '] = 'Vyberte přezdívku:';
$a->strings['Import your profile to this friendica instance'] = 'Importovat váš profil do této instance Friendica';
$a->strings['Note: This node explicitly contains adult content'] = 'Poznámka: Tento server explicitně obsahuje obsah pro dospělé';
$a->strings['Registration successful. Please check your email for further instructions.'] = 'Registrace byla úspěšná. Zkontrolujte prosím svůj e-mail pro další instrukce.';
$a->strings['Failed to send email message. Here your accout details:<br> login: %s<br> password: %s<br><br>You can change your password after login.'] = 'Nepovedlo se odeslat e-mailovou zprávu. Zde jsou detaily vašeho účtu:<br> přihlašovací jméno: %s<br> heslo: %s<br><br>Své heslo si můžete změnit po přihlášení.';
$a->strings['Registration successful.'] = 'Registrace byla úspěšná.';
$a->strings['Your registration can not be processed.'] = 'Vaši registraci nelze zpracovat.';
$a->strings['Your registration is pending approval by the site owner.'] = 'Vaše registrace čeká na schválení vlastníkem serveru.';
$a->strings['Please enter your password to access this page.'] = 'Pro přístup k této stránce prosím zadejte své heslo.';
$a->strings['Friendiqa on my Fairphone 2...'] = 'Friendiqa na mém Fairphone 2...';
$a->strings['Two-factor authentication successfully disabled.'] = 'Dvoufázové ověřování úspěšně zakázáno.';
$a->strings['<p>Use an application on a mobile device to get two-factor authentication codes when prompted on login.</p>'] = '<p>Pomocí aplikace na mobilním zařízení získejte při přihlášení kódy pro dvoufázové ověřování.</p>';
$a->strings['Authenticator app'] = 'Autentizační aplikace';
$a->strings['Configured'] = 'Nakonfigurováno';
$a->strings['Not Configured'] = 'Nenakonfigurováno';
$a->strings['<p>You haven\'t finished configuring your authenticator app.</p>'] = '<p>Nedokončil/a jste konfiguraci vaší autentizační aplikace.</p>';
$a->strings['<p>Your authenticator app is correctly configured.</p>'] = '<p>Vaše autentizační aplikace je správně nakonfigurována.</p>';
$a->strings['Recovery codes'] = 'Záložní kódy';
$a->strings['Remaining valid codes'] = 'Zbývající platné kódy';
$a->strings['<p>These one-use codes can replace an authenticator app code in case you have lost access to it.</p>'] = '<p>Tyto jednorázové kódy mohou nahradit kód autentizační aplikace, pokud k ní ztratíte přístup.</p>';
$a->strings['Actions'] = 'Akce';
$a->strings['Current password:'] = 'Aktuální heslo:';
$a->strings['You need to provide your current password to change two-factor authentication settings.'] = 'Pro změnu nastavení dvoufázového ověřování musíte poskytnout vaše aktuální heslo.';
$a->strings['Enable two-factor authentication'] = 'Povolit dvoufázové ověřování';
$a->strings['Disable two-factor authentication'] = 'Zakázat dvoufázové ověřování';
$a->strings['Show recovery codes'] = 'Zobrazit záložní kódy';
$a->strings['Finish app configuration'] = 'Dokončit konfiguraci aplikace';
$a->strings['New recovery codes successfully generated.'] = 'Nové záložní kódy byly úspěšně vygenerovány.';
$a->strings['Two-factor recovery codes'] = 'Dvoufázové záložní kódy';
$a->strings['<p>Recovery codes can be used to access your account in the event you lose access to your device and cannot receive two-factor authentication codes.</p><p><strong>Put these in a safe spot!</strong> If you lose your device and don’t have the recovery codes you will lose access to your account.</p>'] = '<p>Záložní kódy mohou být použity pro přístup k vašemu účtu, pokud ztratíte přístup k vašemu zařízení a nemůžete obdržet dvoufázové autentizační kódy.</p><p><strong>Uložte je na bezpečné místo!</strong> Pokud zratíte vaše zařízení a nemáte Záložní kódy, ztratíte přístup ke svému účtu.</p>';
$a->strings['When you generate new recovery codes, you must copy the new codes. Your old codes won’t work anymore.'] = 'Když vygenerujete nové záložní kódy, musíte si zkopírovat nové kódy. Vaše staré kódy již nebudou fungovat.';
$a->strings['Generate new recovery codes'] = 'Vygenerovat nové záložní kódy';
$a->strings['Next: Verification'] = 'Další: Ověření';
$a->strings['Two-factor authentication successfully activated.'] = 'Dvoufázové ověření úspěšně aktivováno.';
$a->strings['Invalid code, please retry.'] = 'Neplatný kód, prosím zkuste to znovu.';
$a->strings['<p>Or you can submit the authentication settings manually:</p>
<dl>
	<dt>Issuer</dt>
	<dd>%s</dd>
	<dt>Account Name</dt>
	<dd>%s</dd>
	<dt>Secret Key</dt>
	<dd>%s</dd>
	<dt>Type</dt>
	<dd>Time-based</dd>
	<dt>Number of digits</dt>
	<dd>6</dd>
	<dt>Hashing algorithm</dt>
	<dd>SHA-1</dd>
</dl>'] = '<p>Nebo můžete zadat autentizační nastavení manuálně:</p>
<dl>
	<dt>Vydavatel</dt>
	<dd>%s</dd>
	<dt>Jméno účtu</dt>
	<dd>%s</dd>
	<dt>Tajný klíč</dt>
	<dd>%s</dd>
	<dt>Typ</dt>
	<dd>Založený na čase</dd>
	<dt>Počet číslic</dt>
	<dd>6</dd>
	<dt>Hashovací algoritmus</dt>
	<dd>SHA-1</dd>
</dl>';
$a->strings['Two-factor code verification'] = 'Ověření dvoufázového kódu';
$a->strings['<p>Please scan this QR Code with your authenticator app and submit the provided code.</p>'] = '<p>Prosím naskenujte tento QR kód vaší autentizační aplikací a zadejte poskytnutý kód.</p>';
$a->strings['<p>Or you can open the following URL in your mobile devicde:</p><p><a href="%s">%s</a></p>'] = '<p>Nebo můžete otevřít na vašem mobilním zařízení následující URL: </p><p><a href="%s">%s</a></p>';
$a->strings['Please enter a code from your authentication app'] = 'Prosím zadejte kód z vaší autentizační aplikace';
$a->strings['Verify code and enable two-factor authentication'] = 'Ověřit kód a povolit dvoufázové ověřování';
$a->strings['Bad Request'] = 'Špatný požadavek';
$a->strings['Unauthorized'] = 'Neautorizováno';
$a->strings['Forbidden'] = 'Zakázáno';
$a->strings['Not Found'] = 'Nenalezeno';
$a->strings['Internal Server Error'] = 'Vnitřní chyba serveru';
$a->strings['Service Unavailable'] = 'Služba nedostupná';
$a->strings['The server cannot or will not process the request due to an apparent client error.'] = 'Server nemůže nebo nechce zpracovat požadavek kvůli patrné chybě na straně klienta.';
$a->strings['Authentication is required and has failed or has not yet been provided.'] = 'Je vyžadována autentikace, která neuspěla nebo ještě nebyla poskytnuta.';
$a->strings['The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account.'] = 'Požadavek byl platný, ale server odmítá akci. Uživatel možná nemá nezbytná oprávnění pro zdroj, nebo potřebuje účet..';
$a->strings['The requested resource could not be found but may be available in the future.'] = 'Požadovaný zdroj nemohl být nalezen, ale může být dostupný v budoucnu.';
$a->strings['An unexpected condition was encountered and no more specific message is suitable.'] = 'Došlo k neočekávané chybě a není vhodná žádná specifičtější zpráva.';
$a->strings['The server is currently unavailable (because it is overloaded or down for maintenance). Please try again later.'] = 'Server je aktuálně nedostupný (protože je přetížen nebo probíhá údržba). Prosím zkuste to znovu později.';
$a->strings['Go back'] = 'Přejít zpět';
$a->strings['Remaining recovery codes: %d'] = 'Zbývající záložní kódy: %d';
$a->strings['Two-factor recovery'] = 'Dvoufázové záložní kódy';
$a->strings['<p>You can enter one of your one-time recovery codes in case you lost access to your mobile device.</p>'] = '<p>Pokud jste ztratil/a přístup k vašemu mobilnímu zařízení , můžete zadat jeden z vašich jednorázových záložních kódů.</p>';
$a->strings['Don’t have your phone? <a href="%s">Enter a two-factor recovery code</a>'] = 'Nemáte svůj mobil? <a href="%s">Zadejte dvoufázový záložní kód</a>';
$a->strings['Please enter a recovery code'] = 'Prosím zadejte záložní kód';
$a->strings['Submit recovery code and complete login'] = 'Odeslat záložní kód a dokončit přihlášení';
$a->strings['<p>Open the two-factor authentication app on your device to get an authentication code and verify your identity.</p>'] = '<p>Otevřete na vašem zařízení aplikaci pro dvoufázové ověřování, získejte autentizační kód a ověřte svou identitu.</p>';
$a->strings['Verify code and complete login'] = 'Ověřit kód a dokončit přihlášení';
$a->strings['Welcome to Friendica'] = 'Vítejte na Friendica';
$a->strings['New Member Checklist'] = 'Seznam doporučení pro nového člena';
$a->strings['We would like to offer some tips and links to help make your experience enjoyable. Click any item to visit the relevant page. A link to this page will be visible from your home page for two weeks after your initial registration and then will quietly disappear.'] = 'Rádi bychom vám nabídli několik tipů a odkazů, abychom vám zpříjemnili zážitek. Kliknutím na jakoukoliv položku zobrazíte relevantní stránku. Odkaz na tuto stránku bude viditelný z vaší domovské stránky po dobu dvou týdnů od vaší první registrace a poté tiše zmizí.';
$a->strings['Getting Started'] = 'Začínáme';
$a->strings['Friendica Walk-Through'] = 'Prohlídka Friendica ';
$a->strings['On your <em>Quick Start</em> page - find a brief introduction to your profile and network tabs, make some new connections, and find some groups to join.'] = 'Na vaší stránce <em>Rychlý začátek</em> najděte stručný úvod k vašemu profilu a síťovým záložkám, spojte se s novými kontakty a najděte skupiny, ke kterým se můžete připojit.';
$a->strings['Go to Your Settings'] = 'Navštivte své nastavení';
$a->strings['On your <em>Settings</em> page -  change your initial password. Also make a note of your Identity Address. This looks just like an email address - and will be useful in making friends on the free social web.'] = 'Na vaší stránce <em>Nastavení</em> si změňte vaše první heslo. Věnujte také svou pozornost vaší adrese identity. Vypadá jako e-mailová adresa a bude vám užitečná pro navazování přátelství na svobodném sociálním webu.';
$a->strings['Review the other settings, particularly the privacy settings. An unpublished directory listing is like having an unlisted phone number. In general, you should probably publish your listing - unless all of your friends and potential friends know exactly how to find you.'] = 'Prohlédněte si další nastavení, a to zejména nastavení soukromí. Nezveřejnění svého účtu v adresáři je jako mít nezveřejněné telefonní číslo. Obecně platí, že je lepší mít svůj účet zveřejněný - ledaže by všichni vaši přátelé a potenciální přátelé přesně věděli, jak vás najít.';
$a->strings['Upload a profile photo if you have not done so already. Studies have shown that people with real photos of themselves are ten times more likely to make friends than people who do not.'] = 'Nahrajte si svou profilovou fotku, pokud jste tak již neučinil/a. Studie ukázaly, že lidé se skutečnými fotkami mají desetkrát častěji přátele než lidé, kteří nemají.';
$a->strings['Edit Your Profile'] = 'Upravte si svůj profil';
$a->strings['Edit your <strong>default</strong> profile to your liking. Review the settings for hiding your list of friends and hiding the profile from unknown visitors.'] = 'Upravte si <strong>výchozí</strong> profil podle vašich představ. Prověřte nastavení pro skrytí vašeho seznamu přátel a skrytí profilu před neznámými návštěvníky.';
$a->strings['Profile Keywords'] = 'Profilová klíčová slova';
$a->strings['Set some public keywords for your default profile which describe your interests. We may be able to find other people with similar interests and suggest friendships.'] = 'Nastavte si nějaká veřejná klíčová slova pro výchozí profil, která popisují vaše zájmy. Můžeme vám najít další lidi s podobnými zájmy a navrhnout přátelství.';
$a->strings['Connecting'] = 'Připojuji se';
$a->strings['Importing Emails'] = 'Importuji e-maily';
$a->strings['Enter your email access information on your Connector Settings page if you wish to import and interact with friends or mailing lists from your email INBOX'] = 'Pokud chcete importovat své přátele nebo mailové skupiny z INBOX vašeho e-mailu a komunikovat s nimi, zadejte na vaší stránce Nastavení kontektoru své přístupové údaje do svého e-mailového účtu';
$a->strings['Go to Your Contacts Page'] = 'Navštivte vaši stránku Kontakty';
$a->strings['Your Contacts page is your gateway to managing friendships and connecting with friends on other networks. Typically you enter their address or site URL in the <em>Add New Contact</em> dialog.'] = 'Vaše stránka Kontakty je vaše brána k nastavování přátelství a propojení s přáteli z dalších sítí. Typicky zadáte jejich emailovou adresu nebo URL adresu jejich serveru prostřednictvím dialogu <em>Přidat nový kontakt</em>.';
$a->strings['Go to Your Site\'s Directory'] = 'Navštivte adresář vaší stránky';
$a->strings['The Directory page lets you find other people in this network or other federated sites. Look for a <em>Connect</em> or <em>Follow</em> link on their profile page. Provide your own Identity Address if requested.'] = 'Stránka Adresář vám pomůže najít další lidi na tomto serveru nebo v jiných propojených serverech. Najděte na jejich stránce odkaz <em>Spojit se</em> nebo <em>Sledovat</em>. Uveďte svou vlastní adresu identity, je-li požadována.';
$a->strings['Finding New People'] = 'Nalezení nových lidí';
$a->strings['On the side panel of the Contacts page are several tools to find new friends. We can match people by interest, look up people by name or interest, and provide suggestions based on network relationships. On a brand new site, friend suggestions will usually begin to be populated within 24 hours.'] = 'Na bočním panelu stránky s kontakty je několik nástrojů k nalezení nových přátel. Porovnáme lidi dle zájmů, najdeme lidi podle jména nebo zájmu a poskytneme Vám návrhy založené na přátelství v síti přátel. Na zcela novém serveru se návrhy přátelství nabínou obvykle během 24 hodin.';
$a->strings['Group Your Contacts'] = 'Seskupte si své kontakty';
$a->strings['Once you have made some friends, organize them into private conversation groups from the sidebar of your Contacts page and then you can interact with each group privately on your Network page.'] = 'Jakmile získáte nějaké přátele, uspořádejte si je do soukromých konverzačních skupin na postranním panelu vaší stránky Kontakty a pak můžete komunikovat s každou touto skupinu soukromě prostřednictvím stránky Síť.';
$a->strings['Why Aren\'t My Posts Public?'] = 'Proč nejsou mé příspěvky veřejné?';
$a->strings['Friendica respects your privacy. By default, your posts will only show up to people you\'ve added as friends. For more information, see the help section from the link above.'] = 'Friendica respektuje vaše soukromí. Ve výchozím stavu jsou vaše příspěvky viditelné pouze lidem, které označíte jako vaše přátelé. Více informací naleznete v nápovědě na výše uvedeném odkazu';
$a->strings['Getting Help'] = 'Získání nápovědy';
$a->strings['Go to the Help Section'] = 'Navštivte sekci nápovědy';
$a->strings['Our <strong>help</strong> pages may be consulted for detail on other program features and resources.'] = 'Na stránkách <strong>Nápověda</strong> naleznete nejen další podrobnosti o všech funkcích Friendika ale také další zdroje informací.';
$a->strings['This page is missing a url parameter.'] = 'Této stránce chybí parametr url.';
$a->strings['The post was created'] = 'Příspěvek byl vytvořen';
$a->strings['%d contact edited.'] = [
	0 => '%d kontakt upraven',
	1 => '%d kontakty upraveny',
	2 => '%d kontaktu upraveno',
	3 => '%d kontaktů upraveno',
];
$a->strings['Could not access contact record.'] = 'Nelze získat přístup k záznamu kontaktu.';
$a->strings['Could not locate selected profile.'] = 'Nelze nalézt vybraný profil.';
$a->strings['Contact updated.'] = 'Kontakt aktualizován.';
$a->strings['Contact not found'] = 'Kontakt nenalezen.';
$a->strings['Contact has been blocked'] = 'Kontakt byl zablokován';
$a->strings['Contact has been unblocked'] = 'Kontakt byl odblokován';
$a->strings['Contact has been ignored'] = 'Kontakt bude ignorován';
$a->strings['Contact has been unignored'] = 'Kontakt přestal být ignorován';
$a->strings['Contact has been archived'] = 'Kontakt byl archivován';
$a->strings['Contact has been unarchived'] = 'Kontakt byl vrácen z archivu.';
$a->strings['Drop contact'] = 'Zrušit kontakt';
$a->strings['Do you really want to delete this contact?'] = 'Opravdu chcete smazat tento kontakt?';
$a->strings['Contact has been removed.'] = 'Kontakt byl odstraněn.';
$a->strings['You are mutual friends with %s'] = 'Jste vzájemní přátelé s uživatelem %s';
$a->strings['You are sharing with %s'] = 'Sdílíte s uživatelem %s';
$a->strings['%s is sharing with you'] = '%s s vámi sdílí';
$a->strings['Private communications are not available for this contact.'] = 'Soukromá komunikace není dostupná pro tento kontakt.';
$a->strings['Never'] = 'Nikdy';
$a->strings['(Update was successful)'] = '(Aktualizace byla úspěšná)';
$a->strings['(Update was not successful)'] = '(Aktualizace nebyla úspěšná)';
$a->strings['Suggest friends'] = 'Navrhnout přátele';
$a->strings['Network type: %s'] = 'Typ sítě: %s';
$a->strings['Communications lost with this contact!'] = 'Komunikace s tímto kontaktem byla ztracena!';
$a->strings['Fetch further information for feeds'] = 'Načíst další informace pro kanál';
$a->strings['Fetch information like preview pictures, title and teaser from the feed item. You can activate this if the feed doesn\'t contain much text. Keywords are taken from the meta header in the feed item and are posted as hash tags.'] = 'Načíst informace jako obrázky náhledu, nadpis a popisek z položky kanálu. Toto můžete aktivovat, pokud kanál neobsahuje moc textu. Klíčová slova jsou vzata z hlavičky meta v položce kanálu a jsou zveřejněna jako hashtagy.';
$a->strings['Fetch information'] = 'Načíst informace';
$a->strings['Fetch keywords'] = 'Načíst klíčová slova';
$a->strings['Fetch information and keywords'] = 'Načíst informace a klíčová slova';
$a->strings['Profile Visibility'] = 'Viditelnost profilu';
$a->strings['Contact Information / Notes'] = 'Kontaktní informace / poznámky';
$a->strings['Contact Settings'] = 'Nastavení kontaktů';
$a->strings['Contact'] = 'Kontakt';
$a->strings['Please choose the profile you would like to display to %s when viewing your profile securely.'] = 'Vyberte prosím profil, který chcete zobrazit %s při zabezpečeném prohlížení vašeho profilu.';
$a->strings['Their personal note'] = 'Jejich osobní poznámka';
$a->strings['Edit contact notes'] = 'Upravit poznámky kontaktu';
$a->strings['Block/Unblock contact'] = 'Blokovat / Odblokovat kontakt';
$a->strings['Ignore contact'] = 'Ignorovat kontakt';
$a->strings['Repair URL settings'] = 'Opravit nastavení adresy URL ';
$a->strings['View conversations'] = 'Zobrazit konverzace';
$a->strings['Last update:'] = 'Poslední aktualizace:';
$a->strings['Update public posts'] = 'Aktualizovat veřejné příspěvky';
$a->strings['Update now'] = 'Aktualizovat';
$a->strings['Unignore'] = 'Přestat ignorovat';
$a->strings['Currently blocked'] = 'V současnosti zablokováno';
$a->strings['Currently ignored'] = 'V současnosti ignorováno';
$a->strings['Currently archived'] = 'Aktuálně archivován';
$a->strings['Awaiting connection acknowledge'] = 'Čekám na potrvzení spojení';
$a->strings['Replies/likes to your public posts <strong>may</strong> still be visible'] = 'Odpovědi/oblíbení na vaše veřejné příspěvky <strong>mohou</strong> být stále viditelné';
$a->strings['Notification for new posts'] = 'Oznámení o nových příspěvcích';
$a->strings['Send a notification of every new post of this contact'] = 'Posílat oznámení o každém novém příspěvku tohoto kontaktu';
$a->strings['Blacklisted keywords'] = 'Zakázaná klíčová slova';
$a->strings['Comma separated list of keywords that should not be converted to hashtags, when "Fetch information and keywords" is selected'] = 'Seznam klíčových slov, které by neměly být převáděna na hashtagy, když je zvoleno „Načíst informace a klíčová slova“. Oddělujte čárkami';
$a->strings['Show all contacts'] = 'Zobrazit všechny kontakty';
$a->strings['Pending'] = 'Čekající';
$a->strings['Blocked'] = 'Blokované';
$a->strings['Only show blocked contacts'] = 'Zobrazit pouze blokované kontakty';
$a->strings['Ignored'] = 'Ignorované';
$a->strings['Only show ignored contacts'] = 'Zobrazit pouze ignorované kontakty';
$a->strings['Archived'] = 'Archivované';
$a->strings['Only show archived contacts'] = 'Zobrazit pouze archivované kontakty';
$a->strings['Hidden'] = 'Skryté';
$a->strings['Only show hidden contacts'] = 'Zobrazit pouze skryté kontakty';
$a->strings['Organize your contact groups'] = 'Organizovat vaše skupiny kontaktů';
$a->strings['Search your contacts'] = 'Prohledat vaše kontakty';
$a->strings['Archive'] = 'Archivovat';
$a->strings['Unarchive'] = 'Vrátit z archivu';
$a->strings['Batch Actions'] = 'Souhrnné akce';
$a->strings['Conversations started by this contact'] = 'Konverzace, které tento kontakt začal';
$a->strings['Posts and Comments'] = 'Příspěvky a komentáře';
$a->strings['View all contacts'] = 'Zobrazit všechny kontakty';
$a->strings['View all common friends'] = 'Zobrazit všechny společné přátele';
$a->strings['Advanced Contact Settings'] = 'Pokročilé nastavení kontaktu';
$a->strings['Mutual Friendship'] = 'Vzájemné přátelství';
$a->strings['is a fan of yours'] = 'je váš fanoušek';
$a->strings['you are a fan of'] = 'jste fanouškem';
$a->strings['Edit contact'] = 'Upravit kontakt';
$a->strings['Toggle Blocked status'] = 'Přepínat stav Blokováno';
$a->strings['Toggle Ignored status'] = 'Přepínat stav Ignorováno';
$a->strings['Toggle Archive status'] = 'Přepínat stav Archivováno';
$a->strings['Delete contact'] = 'Odstranit kontakt';
$a->strings['Friendica Communications Server - Setup'] = 'Komunikační server Friendica - Nastavení';
$a->strings['System check'] = 'Zkouška systému';
$a->strings['Check again'] = 'Vyzkoušet znovu';
$a->strings['Base settings'] = 'Základní nastavení';
$a->strings['Host name'] = 'Jméno hostitele (host name)';
$a->strings['Overwrite this field in case the determinated hostname isn\'t right, otherweise leave it as is.'] = 'Toto pole přepište, pokud určený název hostitele není správný, jinak to nechte tak, jak to je.';
$a->strings['Base path to installation'] = 'Základní cesta k instalaci';
$a->strings['If the system cannot detect the correct path to your installation, enter the correct path here. This setting should only be set if you are using a restricted system and symbolic links to your webroot.'] = 'Pokud systém nemůže detekovat správnou cestu k Vaší instalaci, zde zadejte jinou cestu. Toto nastavení by mělo být nastaveno pouze, pokud používáte omezený systém a symbolické odkazy ke kořenové složce webu.';
$a->strings['Sub path of the URL'] = 'Podcesta URL';
$a->strings['Overwrite this field in case the sub path determination isn\'t right, otherwise leave it as is. Leaving this field blank means the installation is at the base URL without sub path.'] = 'Toto pole přepište, pokud určení podcesty není správné, jinak to nechte tak, jak to je. Pokud tohle necháte prázdné, znamená to, že se instalace nachází v základním URL bez podcesty.';
$a->strings['Database connection'] = 'Databázové spojení';
$a->strings['In order to install Friendica we need to know how to connect to your database.'] = 'Pro instalaci Friendica potřebujeme znát připojení k vaší databázi.';
$a->strings['Please contact your hosting provider or site administrator if you have questions about these settings.'] = 'Pokud máte otázky k následujícím nastavením, obraťte se na svého poskytovatele hostingu nebo administrátora serveru.';
$a->strings['The database you specify below should already exist. If it does not, please create it before continuing.'] = 'Databáze, kterou uvedete níže, by již měla existovat. Pokud to tak není, prosíme, vytvořte ji před pokračováním.';
$a->strings['Database Server Name'] = 'Jméno databázového serveru';
$a->strings['Database Login Name'] = 'Přihlašovací jméno k databázi';
$a->strings['Database Login Password'] = 'Heslo k databázovému účtu ';
$a->strings['For security reasons the password must not be empty'] = 'Z bezpečnostních důvodů nesmí být heslo prázdné.';
$a->strings['Database Name'] = 'Jméno databáze';
$a->strings['Please select a default timezone for your website'] = 'Prosím, vyberte výchozí časové pásmo pro váš server';
$a->strings['Site settings'] = 'Nastavení webu';
$a->strings['Site administrator email address'] = 'E-mailová adresa administrátora webu';
$a->strings['Your account email address must match this in order to use the web admin panel.'] = 'Vaše e-mailová adresa účtu se musí s touto shodovat, aby bylo možné využívat administrační panel ve webovém rozhraní.';
$a->strings['System Language:'] = 'Systémový jazyk';
$a->strings['Set the default language for your Friendica installation interface and to send emails.'] = 'Nastavte si výchozí jazyk pro vaše instalační rozhraní Friendica a pro odesílání e-mailů.';
$a->strings['Your Friendica site database has been installed.'] = 'Databáze vašeho serveru Friendica  byla nainstalována.';
$a->strings['Installation finished'] = 'Instalace dokončena';
$a->strings['<h1>What next</h1>'] = '<h1>Co dál</h1>';
$a->strings['IMPORTANT: You will need to [manually] setup a scheduled task for the worker.'] = 'DŮLEŽITÉ: Budete si muset [manuálně] nastavit naplánovaný úkol pro pracovníka.';
$a->strings['Go to your new Friendica node <a href="%s/register">registration page</a> and register as new user. Remember to use the same email you have entered as administrator email. This will allow you to enter the site admin panel.'] = 'Přejděte k <a href="%s/register">registrační stránce</a> vašeho nového serveru Friendica a zaregistrujte se jako nový uživatel. Nezapomeňte použít stejný e-mail, který jste zadal/a jako administrátorský e-mail. To vám umožní navštívit panel pro administraci stránky.';
$a->strings['This entry was edited'] = 'Tato položka byla upravena';
$a->strings['Private Message'] = 'Soukromá zpráva';
$a->strings['Delete locally'] = 'Smazat lokálně';
$a->strings['Delete globally'] = 'Smazat globálně';
$a->strings['Remove locally'] = 'Odstranit lokálně';
$a->strings['save to folder'] = 'uložit do složky';
$a->strings['I will attend'] = 'zúčastním se';
$a->strings['I will not attend'] = 'nezúčastním se';
$a->strings['I might attend'] = 'mohl bych se zúčastnit';
$a->strings['ignore thread'] = 'ignorovat vlákno';
$a->strings['unignore thread'] = 'přestat ignorovat vlákno';
$a->strings['toggle ignore status'] = 'přepínat stav ignorování';
$a->strings['add star'] = 'přidat hvězdu';
$a->strings['remove star'] = 'odebrat hvězdu';
$a->strings['toggle star status'] = 'přepínat hvězdu';
$a->strings['starred'] = 's hvězdou';
$a->strings['add tag'] = 'přidat štítek';
$a->strings['like'] = 'líbí se mi';
$a->strings['dislike'] = 'nelíbí se mi';
$a->strings['Share this'] = 'Sdílet toto';
$a->strings['share'] = 'sdílet';
$a->strings['to'] = 'na';
$a->strings['via'] = 'přes';
$a->strings['Wall-to-Wall'] = 'Ze zdi na zeď';
$a->strings['via Wall-To-Wall:'] = 'ze zdi na zeď';
$a->strings['Reply to %s'] = 'Odpovědět uživateli %s';
$a->strings['Notifier task is pending'] = 'Úloha pro notifiera čeká';
$a->strings['Delivery to remote servers is pending'] = 'Doručení vzdáleným serverům čeká';
$a->strings['Delivery to remote servers is underway'] = 'Doručení vzdáleným serverům je v plném proudu';
$a->strings['Delivery to remote servers is mostly done'] = 'Doručení vzdáleným serverům je téměř hotovo';
$a->strings['Delivery to remote servers is done'] = 'Doručení vzdáleným serverům je hotovo';
$a->strings['%d comment'] = [
	0 => '%d komentář',
	1 => '%d komentáře',
	2 => '%d komentáře',
	3 => '%d komentářů',
];
$a->strings['Show more'] = 'Zobrazit více';
$a->strings['Show fewer'] = 'Zobrazit méně';
$a->strings['You must be logged in to use addons. '] = 'Pro použití doplňků musíte být přihlášen/a.';
$a->strings['Delete this item?'] = 'Odstranit tuto položku?';
$a->strings['toggle mobile'] = 'přepínat mobilní zobrazení';
$a->strings['Legacy module file not found: %s'] = 'Soubor legacy modulu nenalezen: %s';
$a->strings['The form security token was not correct. This probably happened because the form has been opened for too long (>3 hours) before submitting it.'] = 'Formulářový bezpečnostní token nebyl správný. To pravděpodobně nastalo kvůli tom, že formulář byl otevřen příliš dlouho (>3 hodiny) před jeho odesláním.';
$a->strings['Could not find any unarchived contact entry for this URL (%s)'] = 'Nelze najít žádný nearchivovaný záznam kontaktu pro tuto URL adresu (%s)';
$a->strings['The contact entries have been archived'] = 'Záznamy kontaktů byly archivovány';
$a->strings['Enter new password: '] = 'Zadejte nové heslo';
$a->strings['Post update version number has been set to %s.'] = 'Číslo verze post update bylo nastaveno na %s.';
$a->strings['Check for pending update actions.'] = 'Zkontrolovat čekající akce po aktualizaci.';
$a->strings['Done.'] = 'Hotovo.';
$a->strings['Execute pending post updates.'] = 'Provést čekající aktualizace příspěvků.';
$a->strings['All pending post updates are done.'] = 'Všechny čekající aktualizace příspěvků jsou hotové.';
$a->strings['No system theme config value set.'] = 'Není nastavena konfigurační hodnota systémového motivu.';
$a->strings['%s: Updating author-id and owner-id in item and thread table. '] = '%s: Aktualizuji author-id a owner-id v tabulce položek a vláken.';
$a->strings['%s: Updating post-type.'] = '%s: Aktualizuji post-type.';
