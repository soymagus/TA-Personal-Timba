# Extension Guide

Menú raíz estable: `ta-personal-timba`.

Hooks iniciales:
- `tapt_register_modules`
- `tapt_admin_menu` (recibe el parent slug)

Prefijo PHP: `TAPT_`. Prefijo hooks/opciones: `tapt_`.

Los complementos estadísticos deben consumir la base histórica sin modificar resultados oficiales. El esquema está versionado mediante `TAPT_DB_VERSION`.
