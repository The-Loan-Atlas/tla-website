#!/usr/bin/env bash
# Usage: ./verify-redirects.sh redirects-wave1.csv
# Checks each source returns a single 301 to its target, and the target returns 200.
set -u
BASE="https://www.theloanatlas.com"
fail=0
tail -n +2 "$1" | while IFS=, read -r src tgt _ _; do
  read -r code loc < <(curl -s -o /dev/null -w "%{http_code} %{redirect_url}" "$BASE$src")
  tcode=$(curl -s -o /dev/null -w "%{http_code}" "$BASE$tgt")
  if [[ "$code" == "301" && "$loc" == "$BASE$tgt" && "$tcode" == "200" ]]; then echo "OK   $src -> $tgt"
  else echo "FAIL $src  got $code ${loc:-<none>}  (target $tgt = $tcode)"; fi
  sleep 0.5
done
