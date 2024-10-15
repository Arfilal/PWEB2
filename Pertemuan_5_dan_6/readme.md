
# PHP OOP Pertemuan 5 dan 6

Proyek ini adalah implementasi sistem manajemen universitas sederhana menggunakan PHP, dengan fokus pada penerapan prinsip-prinsip Pemrograman Berorientasi Objek (OOP). Proyek ini mencakup manajemen data dosen, mahasiswa, dan jurnal akademik.

## Penerapan Konsep OOP

### 1. Inheritance (Pewarisan)

Inheritance diterapkan melalui penggunaan kelas turunan yang mewarisi sifat dan perilaku dari kelas induk.

#### Contoh:
- Kelas `Dosen` dan `Mahasiswa` mewarisi dari kelas abstrak `Person`.
- Kelas `JurnalDosen` dan `JurnalMahasiswa` mewarisi dari kelas abstrak `Jurnal`.

```php
abstract class Person {
    // ...
}

class Dosen extends Person {
    // ...
}

class Mahasiswa extends Person {
    // ...
}
```

### 2. Polymorphism (Polimorfisme)

Polimorfisme diterapkan melalui penggunaan metode yang memiliki nama sama namun implementasi berbeda di kelas-kelas turunan.

#### Contoh:
- Metode `getRole()` di-override di kelas `Dosen` dan `Mahasiswa`.
- Metode `ajukanJurnal()` diimplementasikan secara berbeda di `JurnalDosen` dan `JurnalMahasiswa`.

```php
abstract class Person {
    abstract public function getRole();
}

class Dosen extends Person {
    public function getRole() {
        return "Dosen";
    }
}

class Mahasiswa extends Person {
    public function getRole() {
        return "Mahasiswa";
    }
}
```

### 3. Encapsulation (Enkapsulasi)

Enkapsulasi diterapkan dengan membuat atribut private dan menyediakan metode getter untuk mengaksesnya.

#### Contoh:
- Atribut `nidn` di kelas `Dosen` dan `nim` di kelas `Mahasiswa` dibuat private.
- Metode getter (`getNidn()` dan `getNim()`) disediakan untuk mengakses atribut tersebut.

```php
class Dosen extends Person {
    private $nidn;

    public function getNidn() {
        return $this->nidn;
    }
}

class Mahasiswa extends Person {
    private $nim;

    public function getNim() {
        return $this->nim;
    }
}
```

### 4. Abstraction (Abstraksi)

Abstraksi diterapkan melalui penggunaan kelas abstrak dan metode abstrak.

#### Contoh:
- Kelas `Person` dan `Jurnal` dibuat sebagai kelas abstrak.
- Metode abstrak `getRole()` di kelas `Person` dan `ajukanJurnal()` di kelas `Jurnal`.

```php
abstract class Person {
    abstract public function getRole();
}

abstract class Jurnal {
    abstract public function ajukanJurnal();
}
```

5. Lihat output untuk melihat contoh penggunaan kelas-kelas yang telah dibuat.

## Contoh Output

![Screenshot 2024-10-15 225241](https://github.com/user-attachments/assets/fe7dec64-408b-4b03-8b22-185556e4eccc)

```

## Kesimpulan

Proyek ini mendemonstrasikan penerapan empat konsep utama OOP dalam konteks sistem manajemen universitas:

1. **Inheritance** memungkinkan pembuatan hierarki kelas yang logis dan efisien.
2. **Polymorphism** memungkinkan fleksibilitas dalam implementasi metode di kelas-kelas turunan.
3. **Encapsulation** melindungi data sensitif dan menyediakan antarmuka yang terkontrol untuk mengaksesnya.
4. **Abstraction** memungkinkan pembuatan kerangka kerja yang dapat diperluas untuk jenis-jenis Person dan Jurnal.
