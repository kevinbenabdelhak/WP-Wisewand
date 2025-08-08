# WP Wisewand

**Contributors:** kevinbenabdelhak
**Tags:** webhook, post, api, création d’articles, sécurité, automatisation
**Requires at least:** 5.0
**Tested up to:** 6.8.1
**Requires PHP:** 7.0
**Stable tag:** 1.0
**License:** GPLv2 or later
**License URI:** [https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html)

WP Wisewand vous permet de créer des articles WordPress à distance en envoyant une requête POST à une **URL secrète**. Cette URL est générée automatiquement et peut être modifiée dans l'administration de votre site.

[![Voir le tutoriel](https://img.youtube.com/vi/vTg3SSeRf0w/maxresdefault.jpg)](https://www.youtube.com/watch?v=vTg3SSeRf0w&ab_channel=KevinBenabdelhak)


## Description

### WP Wisewand – Créez des articles par webhook sécurisé sur WordPress

WP Wisewand est un plugin WordPress qui génère automatiquement une URL secrète lors de son activation. Cette URL, que vous pouvez modifier à tout moment, permet de recevoir des requêtes POST pour créer de nouveaux articles. C'est l'outil parfait pour automatiser la publication de contenu depuis des applications externes, des scripts, ou d'autres services, tout en maintenant un niveau de sécurité élevé grâce à son URL unique et difficile à deviner.

#### Fonctionnalités principales :

1.  **Webhook sécurisé** : Crée une URL secrète, agissant comme un mot de passe, que vous pouvez renouveler à tout moment depuis la page d'options.
2.  **Création d'articles à distance** : Publiez de nouveaux posts WordPress en envoyant un simple JSON via une requête POST à l'endpoint dédié.
3.  **Administration simple** : Vous trouverez et pourrez modifier l'URL de votre webhook dans **Réglages > WP Wisewand**.
4.  **Automatisation de la publication** : Connectez n'importe quel outil externe pour créer du contenu directement dans WordPress, sans avoir à vous y connecter manuellement.

---

## Installation

1.  **Téléchargez le fichier ZIP du plugin** :
    Rendez-vous sur : [https://kevin-benabdelhak.fr/plugins/wp-wisewand/](https://kevin-benabdelhak.fr/plugins/wp-wisewand/)

2.  **Uploadez le fichier ZIP du plugin** :
    * Dans votre tableau de bord WordPress, allez dans **Extensions > Ajouter**.
    * Cliquez sur **Téléverser une extension**.
    * Sélectionnez le fichier ZIP que vous avez téléchargé, puis cliquez sur **Installer maintenant**.

3.  **Activez le plugin** :
    Une fois l'installation terminée, cliquez sur **Activer** pour commencer.

4.  **Utilisation** :
    * Naviguez vers **Réglages > WP Wisewand** pour trouver ou personnaliser l'URL de votre webhook.
    * Copiez cette URL.
    * Collez-la sur Wisewand (dans la section **Connexions > Webhooks**) ou dans tout autre outil compatible.

---

## FAQ

### Est-ce que le plugin est sécurisé ?

Oui, l'URL du webhook est une chaîne de caractères aléatoire, longue et complexe. Elle est unique à votre installation, ce qui la rend extrêmement difficile à deviner.

### Que faire si je veux changer l'URL ?

Allez simplement dans **Réglages > WP Wisewand** pour modifier ou regénérer le slug de votre webhook.

### Puis-je créer d'autres types de publications que "post" ?

La version actuelle est conçue pour créer des articles classiques ("post"). Cependant, le plugin peut être étendu pour prendre en charge d'autres types de publications si vous en avez besoin.

### Est-ce que le plugin fonctionne avec tous les thèmes ?

Oui, WP Wisewand est indépendant du thème que vous utilisez, car il crée des articles WordPress standards qui sont ensuite gérés par le thème de votre site.

---

## MAJ

### 1.0

* Génération automatique d'une clé (Webhook)
* Longueur de 50 caractères pour la clé
* Création d'une route pour la création d'articles WP

<a href="https://kevin-benabdelhak.fr/soutenir/">
  <img src="https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExOXY0cmdrdnNjcXlxb3hrcG15YmpzYWRqZ3BpeHNyY3I4YjZ1eXc0dSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/R9mgVlsCuv6XCDK8Lb/giphy.gif" alt="Soutenir Kevin Benabdelhak pour développer des plugins WordPress" style="width:100%;" />
</a>
