import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'PWA';
  public readonly VAPID_PUBLIC_KEY = 'BDhAajzeTyQhkqtfkjut0axa5RhC9J329Sjv1RifzFUluOgD3kRqnq7xz2mWmXUJke707EyvBNiXOH41nk2HEFM';
}
