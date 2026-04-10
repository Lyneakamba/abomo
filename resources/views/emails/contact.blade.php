<x-mail::message>
# Nouveau message reçu via le site

Vous avez reçu un nouveau message depuis le formulaire de contact d'**INSIDE COMMERCIAL SARL**.

---

**Expéditeur**

| Champ | Valeur |
|---|---|
| Nom | {{ $contact->nom }} |
| Entreprise | {{ $contact->entreprise ?: '—' }} |
| Email | {{ $contact->email }} |
| Téléphone | {{ $contact->telephone ?: '—' }} |

---

**Objet :** {{ $contact->objet }}

**Message :**

{{ $contact->message }}

---

<x-mail::button :url="'mailto:' . $contact->email">
Répondre à {{ $contact->nom }}
</x-mail::button>

Cordialement,<br>
**INSIDE COMMERCIAL SARL** — Système de notifications
</x-mail::message>
