# FrameKeeper

FrameKeeper protects items displayed in normal and glowing item frames. Axolotl-PM API 5 no longer provides the historical `ItemFrameDropItemEvent`, so the plugin cancels the pre-attack `PlayerInteractEvent` when a player left-clicks an occupied item frame. This prevents the framed item from being removed; it also means the occupied frame itself cannot be broken until it is empty. Empty frames and right-click interactions are unaffected.

## Compatibility and validation

The manifest requires Axolotl-PM API 5.0.0. PHPStan max and reproducible PHAR builds are checked against pinned API 5.0.0 and 5.49.1 source revisions. These checks do not claim compatibility with every API 5 release.

CI starts the generated PHAR on an isolated Axolotl-PM server and checks clean startup and shutdown. It does not simulate a connected player attacking or rotating an item frame.

## Credits and distribution

The manifest retains KhoaGamingPro as the author. There is no LICENSE file or verified grant for redistributing a modified build; no license was added and no stable release was published.

For questions about the NhanAZ ecosystem, use [NhanAZ Discord](https://discord.gg/j2X83ujT6c).
