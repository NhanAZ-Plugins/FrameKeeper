# FrameKeeper

FrameKeeper is a legacy PocketMine-MP plugin snapshot intended to prevent players from removing items from item frames. The [event handler](src/KhoaGamingPro/FrameKeeper/events.php) cancels `ItemFrameDropItemEvent`. The [manifest](plugin.yml) credits KhoaGamingPro and declares several historical 3.0.0 and 3.0.1 API values.

The historical event API has not been checked against Axolotl-PM 5.x, so compatibility with that branch is not claimed. This repository has no current Axolotl-PM 5 build, static analysis pass, runtime test or stable release. The original Vietnamese description and startup message remain in the manifest and source.

No LICENSE file or documented grant for distributing a modified build was found. A port or release requires verified rights and an isolated test that item frame contents stay intact under the supported server API. See the [plugin bootstrap](src/KhoaGamingPro/FrameKeeper/main.php) for the existing registration logic.
