import { Config } from 'ziggy-js'

export interface User {
  id: number
  name: string
  email: string
  email_verified_at: string
}

interface Shop {
  id: string
  created_at: datetime
  updated_at: datetime
  name: string
  street: string
  postal_code: string
  country: string
  city: string
}

interface Product {
  id: string
  created_at: datetime
  updated_at: datetime
  name: string
}

interface Order {
  id: string
  created_at: datetime
  updated_at: datetime
  product: Product
  user: User
  amount: number
}

export type PageProps<
  T extends Record<string, unknown> = Record<string, unknown>
> = T & {
  auth: {
    user: User
  }
  ziggy: Config & { location: string }
}
