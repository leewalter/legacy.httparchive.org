<?php 
/*
Copyright 2010 Google Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/

require_once("utils.inc");
require_once("stats.inc");

$aDevices = array("IE8", "iphone");
$aLabels = archiveLabels();
$aSlices = sliceNames();
foreach ( $aDevices as $device ) {
	for ( $i = count($aLabels)-1; $i >= 0; $i-- ) {
		// do labels in reverse chrono order so newest are ready first
		$label = $aLabels[$i];
		foreach ( $aSlices as $slice ) {
			echo "$label $slice $device...";
			addStats($label, $slice, $device);
			echo "DONE\n";
		}
	}
}

echo "finished all slices and labels\n";
?>
