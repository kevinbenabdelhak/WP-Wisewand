=== WP Wisewand ===
Contributors: kevinbenabdelhak
Tags: webhook, post, api, création d’articles, sécurité, automatisation
Requires at least: 5.0
Tested up to: 6.8.1
Requires PHP: 7.0
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

WP Wisewand permet de créer des articles WordPress à distance via une requête POST envoyée à une URL secrète, générée automatiquement et modifiable dans l’administration.

== Description ==
### WP Wisewand – Créez des articles par webhook sécurisé sur WordPress

WP Wisewand est un plugin WordPress qui génère automatiquement une URL secrète à l’activation (modifiable à tout moment), permettant de recevoir des requêtes POST pour créer de nouveaux articles. Utilisez-le pour poster automatiquement depuis des outils externes, applications ou scripts, tout en conservant une sécurité accrue grâce à l’URL unique.

#### Fonctionnalités principales :
1. **Webhook sécurisé** : Génère une URL secrète de type mot de passe, renouvelable à volonté dans la page d’options.
2. **Création d’articles à distance** : Publiez des posts WordPress simplement en envoyant un POST JSON à l’endpoint dédié.
3. **Administration simple** : Retrouvez et modifiez l’URL du webhook dans Réglages > WP Wisewand.
4. **Automatisez vos publications** : Connectez n’importe quel outil externe pour créer du contenu dans WordPress.

== Installation ==
1. **Téléchargez le fichier ZIP du plugin :**
   Rendez-vous sur : [https://kevin-benabdelhak.fr/plugins/wp-wisewand/] (https://kevin-benabdelhak.fr/plugins/wp-wisewand/)

2. **Uploadez le fichier ZIP du plugin :**
   - Allez dans "Extensions" > "Ajouter" de votre panneau WordPress.
   - Cliquez sur "Téléverser une extension".
   - Sélectionnez le fichier ZIP téléchargé puis "Installer maintenant".

3. **Activez le plugin :**
   Cliquez sur "Activer" après installation.

4. **Utilisation :**
   - Rendez-vous dans "Réglages" > "WP Wisewand" pour retrouver ou personnaliser l’URL de votre webhook.
   - Copiez votre webhook
   - Collez-le sur Wisewand (dans la partie "Connexions" > "Webhooks")
== FAQ ==
= Est-ce sécurisé ? =
Oui, l’URL du webhook est une chaîne aléatoire longue et complexe, unique à votre installation.

= Que faire si je veux changer l’URL ? =
Rendez-vous dans "Réglages" > "WP Wisewand" et modifiez ou regénérez le slug du webhook.

= Peut-on utiliser d’autres types de publication que "post" ? =
La version actuelle crée des articles classiques ("post"). Vous pouvez étendre le plugin pour supporter d’autres types si besoin.

= Le plugin fonctionne-t-il avec tous les thèmes ? =
Oui, WP Wisewand fonctionne indépendamment du thème utilisé puisqu’il crée des articles WordPress standards.

== Changelog ==

= 1.0 =
* Génération automatique d'une clé (Webhook)
* 50 caractères
* Route vers la création d'articles WP