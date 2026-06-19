## Breakpoint Device

| Device | Lebar | Deskripsi |
|--------|-------|-----------|
| **HP Kecil** | 355px - 394px | iPhone SE, Samsung Galaxy S8 series |
| **HP Besar** | 395px - 439px | iPhone 14 Pro Max, Samsung S20 Ultra |
| **Tablet** | 440px - 1024px | iPad Mini (768px), iPad Air/Pro (820px+) |
| **Desktop** | > 1024px | Laptop, PC, monitor |

## Catatan Penting

1. **Lebar device** dihitung dari viewport browser, bukan resolusi layar fisik
2. **Touch target** minimum 44x44px untuk button di mobile
3. **Gap antar produk** menggunakan CSS grid/flex yang sudah diatur
4. **Scroll horizontal** dicegah dengan `overflow-x: hidden` pada `body`
