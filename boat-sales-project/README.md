# Boat Sales Web Application

Αυτό το project είναι μια PHP/MySQL web εφαρμογή για την εμφάνιση και διαχείριση δεδομένων σκαφών, πωλήσεων και πελατών. Η εφαρμογή αποτελείται από 12 δυναμικά queries σε ξεχωριστές PHP σελίδες που συνδέονται με βάση δεδομένων.

## 🔧 Χαρακτηριστικά

- Δομημένη βάση δεδομένων με πίνακες όπως Boats, Suppliers, Customers, Sales, Warehouse κ.ά.
- 12 queries με χρήση JOIN, GROUP BY, ORDER BY, COUNT, DATE κ.ά.
- Φιλική προς το χρήστη HTML διεπαφή με μενού πλοήγησης
- Hosting μέσω 000webhost

## 🗂 Περιεχόμενα

- `header.php`: Σύνδεση με βάση & μενού πλοήγησης
- `select1.php` έως `select12.php`: Ερωτήματα προς βάση δεδομένων
- `SQL DATABASE DATA INSERT.odt`: Δημιουργία και εισαγωγή δεδομένων στη βάση
- `.htaccess`: (Προαιρετικά) ρυθμίσεις server
- `PASSWORDS FOR WEBSITE.txt`: Hosting και DB credentials (ΜΗΝ ανεβάσετε αυτό το αρχείο δημόσια!)
- `12 queries creation.odt`: Περιγραφή των queries

## 💻 Πώς να τρέξετε το project

1. Δημιουργήστε βάση με όνομα `id21425981_bash1` στον MySQL server σας.
2. Εκτελέστε το SQL script από το αρχείο `SQL DATABASE DATA INSERT.odt`.
3. Εισάγετε τα αρχεία `.php` σε έναν φάκελο στον Apache server σας (ή σε 000webhost).
4. Βεβαιωθείτε ότι τα στοιχεία σύνδεσης στη βάση στον `header.php` είναι σωστά.
5. Μεταβείτε στο `index` αρχείο ή π.χ. `select1.php` μέσω browser για να δείτε τα αποτελέσματα.

## 📸 Παράδειγμα Online Εφαρμογής

🔗 [Demo Link](https://ulotrichous-meet.000webhostapp.com/public_html/select3.php)

## ⚠️ Σημειώσεις Ασφαλείας

- **ΜΗΝ ανεβάζετε αρχεία με πραγματικά credentials στο GitHub.** Φροντίστε να τα αγνοήσετε με `.gitignore`.

## 👤 Δημιουργός

**Γεώργιος Διονυσόπουλος**  
Email: giorgosdionysopoulos2003@gmail.com
