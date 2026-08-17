# TA Personal Timba — Database Schema v1

Todas las tablas usan `$wpdb->prefix`.

- `tapt_lotteries`: definición de loterías/juegos (slug, tipo, rango, cantidad extraída).
- `tapt_modalities`: modalidades por lotería; `code` es el código usado por el importador.
- `tapt_draws`: concurso/sorteo único por `lottery_id + contest_number`.
- `tapt_results`: una fila por número realmente extraído, asociada a sorteo y modalidad.
- `tapt_imports`: auditoría resumida de cada importación CSV.
- `tapt_activity_log`: altas, importaciones y eliminaciones administrativas.

Relación: Lottery -> Modalities; Lottery -> Draws -> Results <- Modality.

Los datos oficiales observados se almacenan separados de estadísticas derivadas. Pozo Extra de Quini 6 no se registra como extracción independiente.
